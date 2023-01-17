<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ARpage extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/customer/header');
        $this->load->view('templates/customer/navbar');
        $this->load->view('customer/arpage/index');
        $this->load->view('templates/customer/footer_ar');
    }
}
