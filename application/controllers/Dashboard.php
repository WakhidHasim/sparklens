<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('M_auth', 'm_auth');
    }

    public function index()
    {
        $id_user = $this->session->userdata('id_user');

        $data = [
            'title' => 'Dashboard',
            'page' => 'pages/customer/dashboard/index',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'profile' => $this->m_auth->getProfile($id_user),
        ];

        $this->load->view('layouts/customer/app', $data, false);
    }
}
