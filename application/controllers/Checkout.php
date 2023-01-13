<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/customer/header');
        $this->load->view('templates/customer/navbar');
        $this->load->view('customer/Checkout/index');
        $this->load->view('templates/customer/footer');
    }
}