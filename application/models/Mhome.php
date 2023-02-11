<?php

class Mhome extends CI_Model
{
    public function get_produk()
    {
        $this->db->order_by('id_produk', 'DESC');
        $this->db->limit(8);
        return $this->db->get('produk');
    }

    public function insert($data)
    {
        $this->db->insert('member', $data);
    }

    public function get_all_produk_terbaru()
    {
        $this->db->order_by('id_produk', 'DESC');
        $this->db->limit(8);
        return $this->db->get('produk');
    }

    public function getDetailProduk($id)
    {
        return $this->db->get_where('produk', ['id_produk' => $id])->row_array();
    }
}
