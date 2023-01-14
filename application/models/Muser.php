<?php

class Muser extends CI_Model
{

    public function getAllUser()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('role', 'id_role = role_id');
        // $this->db->get_where('role_id = 2');
        $this->db->order_by('id_user', 'ASC');
        return $this->db->get()->result_array();
    }

    public function getAllRole()
    {
        return $this->db->get('role')->result_array();
    }

    public function addUser($data)
    {
        $this->db->insert('user', $data);
        return $this->db->affected_rows();
    }

    public function editUser($data, $id)
    {
        $this->db->update('user', $data, array('id_user' => $id));
        return $this->db->affected_rows();
    }

    public function deleteUser($id)
    {
        $this->db->delete('user', array('id_user' => $id));
        return $this->db->affected_rows();
    }
}
