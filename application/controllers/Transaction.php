<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('M_cart', 'm_cart');
        $this->load->model('M_product', 'm_product');
        $this->load->model('M_transaction', 'm_transaction');
    }

    public function addTransaction()
    {
        $id_user = $this->session->userdata('id_user');

        $this->form_validation->set_rules('recipient_name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|trim');
        $this->form_validation->set_rules('postal_code', 'Postal Code', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Checkout',
                'page' => 'pages/landing/checkout/index',
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'count_items' => $this->m_cart->getCountItemCart($id_user),
                'carts' => $this->m_cart->getAllItemCart($id_user),
                'grandtotal' => $this->m_cart->getGrandTotal($id_user)
            ];

            $this->load->view('layouts/landing/app', $data, false);
        } else {
            $proof_of_payment = $_FILES['proof_of_payment']['name'];

            if ($proof_of_payment) {
                $config['upload_path'] = './asset/images/proof_of_payment/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '5000';
                $config['file_name'] = $proof_of_payment;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('proof_of_payment')) {
                    $proof_of_payment = $this->upload->data('file_name');
                }
            }
            $id_user = $this->session->userdata('id_user');

            $data = [
                "transaction_status_id" => 1,
                "user_id" => $id_user,
                "recipient_name" => $this->input->post('recipient_name', true),
                "phone_number" => $this->input->post('phone_number', true),
                "postal_code" => $this->input->post('postal_code', true),
                "address" => $this->input->post('address', true),
                "proof_of_payment" => $proof_of_payment,
                "transaction_date" => date("Y-m-d")
            ];

            $this->m_transaction->addTransaction($data);
            $transaction_id = $this->db->insert_id();

            $getAllItem = $this->m_cart->getAllItemCart($id_user);

            foreach ($getAllItem as $item) {
                $data_detail = [
                    "transaction_id" => $transaction_id,
                    "cart_id" =>  $item['id_cart']
                ];
                $this->m_transaction->addTransactionDetail($data_detail);

                $id_cart = $item['id_cart'];

                $status = [
                    "is_checkout" => 1
                ];
                $this->m_transaction->changeStatusIsCheckout($id_cart, $status);

                $id_product = $item['id_product'];

                $stock = [
                    "stock" => $item['stock'] - $item['qty']
                ];
                $this->m_product->updateStock($id_product, $stock);
            };

            $this->session->set_flashdata('success', 'Checkout Successfully!');
            redirect('confirmation');
        }
    }
}
