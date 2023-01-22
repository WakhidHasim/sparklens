<?php
class Glb_upload extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
 
    public function do_upload() {
        $config['upload_path']          = './assets/file_glb/';
        $config['allowed_types'] = 'glb|application/octet-stream';
        $config['max_size']             = 50000;
 
        $this->load->library('upload', $config);
 
        if ( ! $this->upload->do_upload('file_glb'))
        {
                $error = array('error' => $this->upload->display_errors());
 
                $this->load->view('coba_upload', $error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                $this->session->set_flashdata('message', 'File has been uploaded successfully');
                redirect(base_url('produk'));
        }
    }
}
