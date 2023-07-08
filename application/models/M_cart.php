<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_cart extends CI_Model
{
    public function checkProductInCart($user_id, $product_id)
    {
        return $this->db->get_where('cart', ['user_id' => $user_id, 'product_id' => $product_id, 'is_checkout' => 0])->row_array();
    }

    public function getProduct($id)
    {
        return $this->db->get_where('product', ['id_product' => $id])->row_array();
    }

    public function getItemCart($id)
    {
        return $this->db->get_where('cart', ['id_cart' => $id])->row_array();
    }

    public function getCountItemCart($id_user)
    {
        $this->db->where('user_id', $id_user);
        $this->db->where('is_checkout', 0);
        $this->db->from('cart');
        return $this->db->count_all_results();
    }

    public function getAllItemCart($user_id)
    {
        $this->db->select('*');
        $this->db->from('cart');
        $this->db->join('user', 'user.id_user = cart.user_id');
        $this->db->join('product', 'product.id_product = cart.product_id');
        $this->db->where('is_checkout', 0);
        $this->db->where('user_id', $user_id);

        return $this->db->get()->result_array();
    }

    public function addItemCart($data)
    {
        $this->db->insert('cart', $data);
        return $this->db->affected_rows();
    }

    public function editQtyItemCart($data, $id)
    {
        $this->db->update('cart', $data, array('id_cart' => $id));
        return $this->db->affected_rows();
    }

    public function deleteItemCart($id)
    {
        $this->db->delete('cart', array('id_cart' => $id));
        return $this->db->affected_rows();
    }

    public function getGrandTotal($user_id)
    {
        $this->db->select('(SELECT SUM(cart.subtotal) FROM cart WHERE cart.is_checkout=0 AND user_id = ' . $user_id . ') AS grandtotal', FALSE);
        return $this->db->get('cart')->row_array();
    }
}
