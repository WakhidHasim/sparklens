<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/dashboard/header');
        $this->load->view('templates/dashboard/aside');
        $this->load->view('dashboard/user/index');
        $this->load->view('templates/dashboard/footer');
    }
}
