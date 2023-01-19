<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mproduk', 'produk');
    }

    public function index()
    {
        $data['session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['produk'] = $this->produk->getAllProduk();

        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/aside');
        $this->load->view('dashboard/produk/index', $data);
        $this->load->view('templates/dashboard/footer');
    }

    public function addProduk()
    {
        $upload = $_FILES['foto_produk']['name'];

        if ($upload) {
            $config['upload_path']   = './assets/images/';
            $config['allowed_types'] = 'glb|jpg|png|jpeg';
            $config['max_size']      = '5000';
            $config['file_name']     = $upload;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_produk')) {
                $foto_produk = $this->upload->data('file_name');
            }
        }

        $data = [
            "nama" => $this->input->post('nama', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "harga" => $this->input->post('harga', true),
            "stok" => $this->input->post('stok', true),
            "foto_produk" => $foto_produk,
            "model" => $this->input->post('model', true)
        ];

        // query untuk menambahkan data artikel
        $produk = $this->produk->addProduk($data);
        if ($produk > 0) {
            redirect('produk');
        } else {
            redirect('produk');
        }
    }
    public function editProduk()
    {
        if ($_FILES['foto_produk']['error'] == 4) {
            $foto_produk = $this->input->post('old_foto_produk');
        } else {
            $foto_produk = $this->_upload();
        }
        $model_ar = $this->_upload();

        $data = [
            'nama_produk' => $this->input->post('nama_produk'),
            'foto_produk' => $foto_produk,
            'model_ar' => $model_ar,
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'deskripsi_produk' => $this->input->post('deskripsi_produk'),
        ];

        $id = $this->input->post('id_produk');
        $dataProduk = $this->m_produk->editProduk($data, $id);
        if ($dataProduk > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Edit Success</h5>
            </div>');
            redirect('produk');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Edit Failed</h5>
            </div>');
            redirect('produk');
        }
    }

    public function deleteProduk()
    {
        $id = $this->input->post('id_produk');
        $dataProduk = $this->m_produk->deleteProduk($id);
        if ($dataProduk > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Delete Success</h5>
            </div>');
            redirect('produk');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Delete Failed</h5>
            </div>');
            redirect('produk');
        }
    }
}
