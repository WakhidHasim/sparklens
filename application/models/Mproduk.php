<?php

class Mproduk extends CI_Model
{

    public function getAllProduk()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->order_by('id_produk', 'ASC');
        return $this->db->get()->result_array();
    }

    public function addProduk($data)
    {
        $this->db->insert('produk', $data);
        return $this->db->affected_rows();
    }

    public function addModel($data)
    {
        $this->db->insert('produk', $data);
        return $this->db->affected_rows();
    }


    public function editProduk($data)
    {
        $id = $this->input->post('id_produk');
        $this->db->update('produk', $data, array('id_produk' => $id));
        return $this->db->affected_rows();
    }

    public function uploadAr($data, $id)
    {
        $this->db->update('produk', $data, array('id_produk' => $id));
        return $this->db->affected_rows();
    }

    public function deleteProduk($id)
    {
        $this->db->delete('produk', array('id_produk' => $id));
        return $this->db->affected_rows();
    }

    public function ambil_id_produk($id)
    {
        $hasil = $this->db->where('id_produk', $id)->get('produk');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function detail_produk($id)
    {
        $result = $this->db->where('id_produk', $id)
            ->limit(1)
            ->get('produk');
        if ($result->num_rows() > 0) {
            return $result->row_object();
        } else {
            return array();
        }
    }
}
