<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mproduk', 'm_produk');
    }

    public function index()
    {
        $data['session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['produk'] = $this->m_produk->getAllProduk();

        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/aside');
        $this->load->view('dashboard/produk/index', $data);
        $this->load->view('templates/dashboard/footer');
    }
    private function _upload()
    {
        $nama = $_FILES['foto_produk']['name'];
        $type = $_FILES['foto_produk']['type'];
        $error = $_FILES['foto_produk']['error'];
        $size = $_FILES['foto_produk']['size'];
        $tmpName = $_FILES['foto_produk']['tmp_name'];

        // Cek ekstensi file
        $ekstensiGambarValid = ['jpg', 'png', 'jpeg', 'svg'];
        $ekstensiGambar = explode('.', $nama);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>alert('Ekstensi File Tidak Diizinkan')</script>";
            return false;
        }

        // Cek size
        if ($size > 50000000) {
            echo "<script>alert('Ekstensi File Terlalu Besar')</script>";
            return false;
        }

        $namaBaru = $nama . uniqid() . '.' . $ekstensiGambar;
        move_uploaded_file($tmpName, 'assets/upload_produk/' . $namaBaru);

        return $namaBaru;
    }

    public function addProduk()
    {
        $foto_produk = $this->_upload();
        $model_ar = $this->_upload();

        $data = [
            'nama_produk' => $this->input->post('nama_produk'),
            'foto_produk' => $foto_produk,
            'model_ar' => $model_ar,
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'deskripsi_produk' => $this->input->post('deskripsi_produk'),
        ];

        $dataProduk = $this->m_produk->addProduk($data);
        if ($dataProduk > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Add Data Success</h5>
            </div>');
            redirect('produk');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Add Data Failed</h5>
            </div>');
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