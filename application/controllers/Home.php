<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        $this->load->model("Mhome", "home");
        $this->load->library('pagination');
    }

    public function index()
    {
        $data['produk_terbaru'] = $this->home->get_all_produk_terbaru()->result();

        $this->load->view('templates/customer/header');
        $this->load->view('templates/customer/navbar');
        $this->load->view('customer/index', $data);
        $this->load->view('templates/customer/footer');
    }

    public function detailProduk($id)
    {
        $data['detail_produk'] = $this->home->getDetailProduk($id);

        $this->load->view('templates/customer/header');
        $this->load->view('templates/customer/navbar');
        $this->load->view('customer/detailproduk/index', $data);
        $this->load->view('templates/customer/footer');
    }
}
