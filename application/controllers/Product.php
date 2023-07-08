<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
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
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/sparklens1/products/';
        $config['total_rows'] = $this->m_product->countProducts();
        $config['start'] = $this->uri->segment(2);
        $config['per_page'] = 2;
        $config['use_page_numbers'] = TRUE;

        $this->pagination->initialize($config);

        echo $this->pagination->create_links();

        $data = [
            'title' => 'Products',
            'page' => 'pages/landing/product/index',
            'products' => $this->m_product->getProductsWithPagination($config['per_page'], $config['start']),
            'count_items' => $this->m_cart->getCountItemCart($id_user)
        ];

        $this->load->view('layouts/landing/app', $data, false);
    }

    public function getDetailProduct($slug)
    {
        $id_user = $this->session->userdata('id_user');

        $data = [
            'page' => 'pages/landing/product/detail',
            'product' => $this->m_product->getProductBySlug($slug),
            'count_items' => $this->m_cart->getCountItemCart($id_user)
        ];

        $this->load->view('layouts/landing/app', $data, false);
    }

    public function showARProduct($slug)
    {
        $id_user = $this->session->userdata('id_user');

        $data = [
            'page' => 'pages/landing/product/glb',
            'product' => $this->m_product->getProductBySlug($slug),
            'count_items' => $this->m_cart->getCountItemCart($id_user)
        ];

        $this->load->view('layouts/ar/app', $data, false);
    }
}
