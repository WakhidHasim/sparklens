<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_product extends CI_Model
{
    // Admin
    public function getCountProduct()
    {
        return $this->db->get('product')->num_rows();
    }

    public function getAllProduct()
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->order_by('id_product', 'DESC');

        return $this->db->get()->result_array();
    }

    public function getProduct($id)
    {
        return $this->db->get_where('product', ['id_product' => $id])->row_array();
    }

    public function addProduct($data)
    {
        $this->db->insert('product', $data);
        return $this->db->affected_rows();
    }

    public function editProduct($data, $id)
    {
        $this->db->update('product', $data, array('id_product' => $id));
        return $this->db->affected_rows();
    }

    public function deleteProduct($id)
    {
        $this->db->delete('product', array('id_product' => $id));
        return $this->db->affected_rows();
    }

    public function addGlbFile($data, $id_product)
    {
        $this->db->where('id_product', $id_product);
        $this->db->update('product', $data);
        return $this->db->affected_rows();
    }

    // Landing
    public function getProductsWithLimit()
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->limit(8);
        $this->db->order_by('id_product', 'DESC');

        return $this->db->get()->result_array();
    }

    public function getProductsWithPagination($limit, $offset)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->limit($limit, $offset);
        $this->db->order_by('id_product', 'DESC');

        return $this->db->get()->result_array();
    }

    public function getProductBySlug($slug)
    {
        return $this->db->get_where('product', ['slug' => $slug])->row_array();
    }

    public function countProducts()
    {
        return $this->db->get('product')->num_rows();
    }

    public function updateStock($id_product, $stock)
    {
        $this->db->update('product', $stock, ['id_product' => $id_product]);
        return $this->db->affected_rows();
    }
}
