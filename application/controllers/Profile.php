<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('M_auth', 'm_auth');
    }

    public function index()
    {
        $id_user = $this->session->userdata('id_user');

        $data = [
            'title' => 'My Profile',
            'page' => 'pages/customer/profile/index',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'profile' => $this->m_auth->getProfile($id_user),
        ];

        $this->load->view('layouts/customer/app', $data, false);
    }

    public function editProfile()
    {
        $id_user = $this->session->userdata('id_user');

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Edit Profile',
                'page' => 'pages/customer/profile/edit',
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'profile' => $this->m_auth->getProfile($id_user),
            ];

            $this->load->view('layouts/customer/app', $data, false);
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email')
            ];

            $this->m_auth->editDataUser($id_user, $data);
            $this->session->set_flashdata('success', 'Profile Successfully Edited!');
            redirect('profile');
        }
    }

    public function changePassword()
    {
        $id_user = $this->session->userdata('id_user');
        $email = $this->session->userdata('email');

        $this->form_validation->set_rules('current_password', 'Current Password', 'trim|required');
        $this->form_validation->set_rules('new_password1', 'New Password', 'trim|required|min_length[8]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'trim|required|min_length[8]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Change Password',
                'page' => 'pages/customer/profile/change_password',
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'profile' => $this->m_auth->getProfile($id_user),
            ];

            $this->load->view('layouts/customer/app', $data, false);
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            $user = $this->m_auth->getProfile($id_user);

            if (!password_verify($current_password, $user['password'])) {
                $this->session->set_flashdata('error', 'The currend password you entered is incorrect!');
                redirect('profile/change_password');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('error', 'The new password must not be the same as the old password!');
                    redirect('profile/change_password');
                } else {
                    $email = $this->session->userdata('email');
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->m_auth->changePassword($email, $password_hash);
                    $this->session->set_flashdata('success', 'The password has been successfully changed!');
                    redirect('profile');
                }
            }
        }
    }
}
