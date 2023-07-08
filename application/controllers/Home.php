<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_cart', 'm_cart');
        $this->load->model('M_product', 'm_product');
    }

    public function index()
    {
        $id_user = $this->session->userdata('id_user');

        $data = [
            'title' => 'Home',
            'page' => 'pages/landing/home/index',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'products' => $this->m_product->getProductsWithLimit(),
            'count_items' => $this->m_cart->getCountItemCart($id_user)
        ];

        $this->load->view('layouts/landing/app', $data, false);
    }
}
