<?php

class Mauth extends CI_Model
{
    public function save($data)
    {
        return $this->db->insert('user', $data);
    }

    public function cekEmail($email)
    {
        return $this->db->get_where('user', ['email' => $email])->row_array();
    }
}
