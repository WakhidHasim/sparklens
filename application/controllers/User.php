<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Muser', 'm_user');
    }

    public function index()
    {
        $data['title'] = 'Data User';
        $data['session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_user->getAllUser();
        $data['role'] = $this->m_user->getAllRole();

        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/aside');
        $this->load->view('dashboard/user/index', $data);
        $this->load->view('templates/dashboard/footer');
    }

    public function addUser()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'id_role_fk' => 2,
            'is_active' => 1
        ];

        if (!empty($data)) {
            $this->m_user->addUser($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Add Data Success</h5>
            </div>');
            redirect('user');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Add Data Failed</h5>
            </div>');
            redirect('user');
        }
    }

    public function editUser()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'id_role_fk' => 2,
            'is_active' => 1
        ];

        $id = $this->input->post('id_user');

        if (!empty($data) && !empty($id)) {
            $this->m_user->editUser($data, $id);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Edit Success</h5>
            </div>');

            redirect('user');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Edit Failed</h5>
            </div>');
            redirect('user');
        }
    }

    public function deleteUser()
    {
        $id = $this->input->post('id_produk');
        if (!empty($id)) {
            $this->m_user->deleteUser($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Delete Success</h5>
            </div>');
            redirect('user');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Delete Failed</h5>
            </div>');
            redirect('user');
        }
    }
}
