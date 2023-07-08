<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth', 'm_auth');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('admin/dashboard');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Login',
                'page' => 'pages/auth/login/index'
            ];

            $this->load->view('layouts/auth/app', $data, false);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->m_auth->login($email);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id_user' => $user['id_user'],
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];

                $this->session->set_userdata($data);

                if ($user['role_id'] == 1) {
                    redirect('admin/dashboard');
                } elseif ($user['role_id'] == 2) {
                    redirect();
                }
            } else {
                $this->session->set_flashdata('failed', 'Your password is incorrect!');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('failed', 'Email Not Registered !');
            redirect('login');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Register',
                'page' => 'pages/auth/register/index'
            ];

            $this->load->view('layouts/auth/app', $data, false);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
            ];

            $this->m_auth->register($data);
            $this->session->set_flashdata('success', 'You have successfully registered, please login first!');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('success', 'You have successfully logged out!');
        redirect('login');
    }
}
