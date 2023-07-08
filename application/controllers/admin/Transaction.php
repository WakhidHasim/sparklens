<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_admin_role();
        $this->load->model('M_transaction', 'm_transaction');
    }

    public function index()
    {
        $transaction_id = $this->input->post('id_transaction');

        $data = [
            'title' => 'Transaction Incoming Orders',
            'page' => 'pages/admin/transaction/index',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'transactions' => $this->m_transaction->getAllIncomingOrders(),
            'transaction_details' => $this->m_transaction->getAllTransactionDetail($transaction_id),
            'notif_orders' => $this->m_transaction->getNotifOrder()
        ];

        $this->load->view('layouts/admin/app', $data, false);
    }

    public function getTransactionDetail($transaction_id)
    {
        $this->form_validation->set_rules('receipt_number', 'Receipt Number', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Transaction Detail',
                'page' => 'pages/admin/transaction/detail',
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'transaction_details' => $this->m_transaction->getAllTransactionDetail($transaction_id),
                'expeditions' => $this->m_transaction->getAllExpedition(),
                'transaction' => $this->m_transaction->getTransaction($transaction_id),
                'notif_orders' => $this->m_transaction->getNotifOrder()
            ];

            $this->load->view('layouts/admin/app', $data, false);
        } else {
            $data = [
                "expedition" => $this->input->post('expedition', true),
                "receipt_number" => $this->input->post('receipt_number', true)
            ];

            $this->m_transaction->addExpedition($data, $transaction_id);

            $status = [
                "transaction_status_id" => 3
            ];

            $this->m_transaction->changeStatusShipped($transaction_id, $status);

            $this->session->set_flashdata('success', 'Receipt Number Added Successfully!');
            redirect('admin/transaction/shipped');
        }
    }

    public function changeStatusPacked($id_transaction)
    {
        $status = [
            "transaction_status_id" => 2
        ];

        $this->m_transaction->changeStatusPacked($id_transaction, $status);
        $this->session->set_flashdata('success', 'Change Status Transaction Packed Successfully!');
        redirect('admin/transaction');
    }

    public function getAllOrderPacked()
    {
        $transaction_id = $this->input->post('id_transaction');

        $data = [
            'title' => 'Transaction Order Packed',
            'page' => 'pages/admin/transaction/packed',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'transactions' => $this->m_transaction->getAllOrderPacked(),
            'transaction_details' => $this->m_transaction->getAllTransactionDetail($transaction_id),
            'notif_orders' => $this->m_transaction->getNotifOrder()
        ];

        $this->load->view('layouts/admin/app', $data, false);
    }

    public function changeStatusShipped($id_transaction)
    {
        $status = [
            "transaction_status_id" => 3
        ];

        $this->m_transaction->changeStatusShipped($id_transaction, $status);
        $this->session->set_flashdata('success', 'Change Status Transaction Shipped Successfully!');
        redirect('admin/transaction/packed');
    }


    public function getAllOrderShipped()
    {
        $transaction_id = $this->input->post('id_transaction');

        $data = [
            'title' => 'Transaction Order Shipped',
            'page' => 'pages/admin/transaction/shipped',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'transactions' => $this->m_transaction->getAllOrderShipped(),
            'transaction_details' => $this->m_transaction->getAllTransactionDetail($transaction_id),
            'notif_orders' => $this->m_transaction->getNotifOrder()
        ];

        $this->load->view('layouts/admin/app', $data, false);
    }

    public function getAllOrderReceived()
    {
        $transaction_id = $this->input->post('id_transaction');

        $data = [
            'title' => 'Transaction Order Received',
            'page' => 'pages/admin/transaction/received',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'transactions' => $this->m_transaction->getAllOrderReceived(),
            'transaction_details' => $this->m_transaction->getAllTransactionDetail($transaction_id),
            'notif_orders' => $this->m_transaction->getNotifOrder()
        ];

        $this->load->view('layouts/admin/app', $data, false);
    }
}
