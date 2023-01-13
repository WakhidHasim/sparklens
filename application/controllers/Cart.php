<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/customer/header');
        $this->load->view('templates/customer/navbar');
        $this->load->view('customer/cart/index');
        $this->load->view('templates/customer/footer');
    }
}