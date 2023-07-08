<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('M_transaction', 'm_transaction');
    }

    public function index()
    {
        $id_user = $this->session->userdata('id_user');

        $data = [
            'title' => 'My Order',
            'page' => 'pages/customer/order/index',
            'transactions' => $this->m_transaction->getAllTransactionUser($id_user),
            'transaction_details' => $this->m_transaction->getAllTransactionDetailUser($id_user)
        ];

        $this->load->view('layouts/customer/app', $data, false);
    }

    public function getDetailOrder($id_transaction)
    {
        $data = [
            'title' => 'My Detail Order',
            'page' => 'pages/customer/order/detail',
            'transaction' => $this->m_transaction->getTransaction($id_transaction),
            'transaction_details' => $this->m_transaction->getAllTransactionDetail($id_transaction),
        ];

        $this->load->view('layouts/customer/app', $data, false);
    }

    public function changeStatusAccept($id_transaction)
    {
        $status = [
            "transaction_status_id" => 4
        ];

        $this->m_transaction->changeStatusReceived($id_transaction, $status);
        $this->session->set_flashdata('success', 'The order has been received!');
        redirect('orders');
    }
}
