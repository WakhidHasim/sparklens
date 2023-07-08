<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_admin_role();
        $this->load->model('M_product', 'm_product');
        $this->load->model('M_transaction', 'm_transaction');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'page' => 'pages/admin/dashboard/index',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'count_products' => $this->m_product->getCountProduct(),
            'count_transactions' => $this->m_transaction->getCountTransaction(),
            'notif_orders' => $this->m_transaction->getNotifOrder()
        ];

        $this->load->view('layouts/admin/app', $data, false);
    }
}
