<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
    public function login($email)
    {
        return $this->db->get_where('user', ['email' => $email])->row_array();
    }

    public function register($data)
    {
        return $this->db->insert('user', $data);
    }

    public function editDataUser($id_user, $data)
    {
        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data);
        return $this->db->affected_rows();
    }

    public function getProfile($id_user)
    {
        return $this->db->get_where('user', ['id_user' => $id_user])->row_array();
    }

    public function changePassword($email, $password)
    {
        $this->db->set('password', $password);
        $this->db->where('email', $email);
        $this->db->update('user');
    }
}
