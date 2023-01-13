<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');

        $this->load->model('Mauth', 'm_auth');
        
        $this->load->library('session');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Email Tidak Boleh Kosong !',
            'valid_email' => 'Email Tidak Valid !'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password Tidak Boleh Kosong !'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Sparklens Login';

            $this->load->view('auth/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->m_auth->cekEmail($email);

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'id_role_fk' => $user['id_role_fk']
                    ];

                    $this->session->set_userdata($data);

                    if ($user['id_role_fk'] == 1) {
                        redirect('admin');
                    } elseif ($user['id_role_fk'] == 2) {
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Password Yang Anda Masukan Salah !
                    </div>');

                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Email Anda Belum Aktif !
                </div>');

                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email Anda Belum Terdaftar !
            </div>');

            redirect('auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Tidak Boleh Kosong !'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Email Tidak Boleh Kosong !',
            'is_unique' => 'Email Sudah Terdaftar !',
            'valid_email' => 'Email Tidak Valid !'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'required' => 'Password Tidak Boleh Kosong !',
            'min_length' => 'Password Terlalu Pendek !',
            'matches' => 'Password Tidak Cocok !'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'matches' => 'Password Tidak Cocok !'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Sparklens Registration';

            $this->load->view('auth/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('auth/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'id_role_fk' => 2,
                'is_active' => 1,
            ];

            $this->m_auth->save($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Selamat, Anda Sudah Berhasil Terdaftar. Silakan Login !
            </div>');

            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_role_fk');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Selamat, Anda Sudah Berhasil Logout !
            </div>');

        redirect('auth');
    }
}
