<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function index()
    {
        $data['session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/aside');
        $this->load->view('dashboard/transaksi/index');
        $this->load->view('templates/dashboard/footer');
    }
}
