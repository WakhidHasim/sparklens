<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/customer/header');
        $this->load->view('customer/index');
        $this->load->view('templates/customer/footer');
    }
}
