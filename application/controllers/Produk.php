<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mproduk', 'produk');
        $this->load->helper(array('form', 'url'));
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
            $config['upload_path'] = './assets/images/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '5000';
            $config['file_name'] = $upload;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_produk')) {
                $foto_produk = $this->upload->data('file_name');
            }
        }

        // $upload = $_FILES['model_3d']['name'];

        // if ($upload) {
        //     $config['upload_path'] = './assets/model_3d/';
        //     $config['allowed_types'] = 'glb|application/octet-stream';
        //     $config['max_size'] = '5000';
        //     $config['file_name'] = $upload;

        //     $this->load->library('upload', $config);

        //     if ($this->upload->do_upload('model_3d')) {
        //         $model_3d = $this->upload->data('file_name');
        //     }
        // }

        $data = [
            "nama" => $this->input->post('nama', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "harga" => $this->input->post('harga', true),
            "stok" => $this->input->post('stok', true),
            "foto_produk" => $foto_produk
            // "model_3d" => ''
        ];

        // Ketok e eror mergo DB ne raiso moco file .glb

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
            $foto_produk = $this->_upload('foto_produk');
        }

        $data = [
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'deskripsi' => $this->input->post('deskripsi'),
            'foto_produk' => $foto_produk
            // 'model' => $model_3d
        ];

        $id = $this->input->post('id_produk');
        $dataProduk = $this->produk->editProduk($data, $id);
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
    private function _upload($field_name)
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '5000';
        $config['file_name'] = $field_name;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload($field_name)) {
            return $this->upload->data('file_name');
        } else {
            return 'default.jpg';
        }
    }

    public function deleteProduk()
    {
        $id = $this->input->post('id_produk');
        $dataProduk = $this->produk->deleteProduk($id);
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
