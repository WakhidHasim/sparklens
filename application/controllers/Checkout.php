<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('M_cart', 'm_cart');
    }

    public function index()
    {
        $id_user = $this->session->userdata('id_user');

        $data = [
            'title' => 'Checkout',
            'page' => 'pages/landing/checkout/index',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'count_items' => $this->m_cart->getCountItemCart($id_user),
            'carts' => $this->m_cart->getAllItemCart($id_user),
            'grandtotal' => $this->m_cart->getGrandTotal($id_user)
        ];

        $this->load->view('layouts/landing/app', $data, false);
    }
}
