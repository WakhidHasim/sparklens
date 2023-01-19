<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coba extends CI_Controller
{
    public function index()
    {
        $this->load->view('coba');
    }

    public function upload_glb()
    {
        // Set file upload configuration
        $config['upload_path'] = './assets/3D_model/';
        $config['allowed_types'] = 'glb';
        $config['max_size'] = 10000; // 2MB

        // Load the upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        // Attempt to upload the file
        if ($this->upload->do_upload('glb_file')) {
            $data = array('upload_data' => $this->upload->data());
            $data_ar = $this->db->insert('coba', $data);
            $this->load->view('coba', $data_ar);
        }
    }
}
