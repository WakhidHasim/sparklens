<?php
defined('BASEPATH') or exit('No direct script access allowed');

class All_produk extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/customer/header');
        $this->load->view('templates/customer/navbar');
        $this->load->view('customer/allproduk/index');
        $this->load->view('templates/customer/footer');
    }
}
