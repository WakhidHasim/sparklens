<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/dashboard/header');
        $this->load->view('templates/dashboard/aside');
        $this->load->view('dashboard/transaksi/index');
        $this->load->view('templates/dashboard/footer');
    }
}
