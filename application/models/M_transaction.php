<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_transaction extends CI_Model
{
    public function addTransaction($data)
    {
        $this->db->insert('transaction', $data);
        return $this->db->affected_rows();
    }

    public function addTransactionDetail($data_detail)
    {
        $this->db->insert('transaction_detail', $data_detail);
        return $this->db->affected_rows();
    }

    public function getAllTransactionUser($user_id)
    {
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('transaction_status', 'transaction_status.id_transaction_status = transaction.transaction_status_id');
        $this->db->join('user', 'user.id_user = transaction.user_id');
        $this->db->where('user.id_user', $user_id);
        $this->db->order_by('id_transaction', 'DESC');

        return $this->db->get()->result_array();
    }

    public function getTransactionCustomer($id_transaction)
    {
        return $this->db->get_where('transaction', ['id_transaction' => $id_transaction])->row_array();
    }

    public function getAllTransactionDetailUser($user_id)
    {
        $this->db->select('*');
        $this->db->from('transaction_detail');
        $this->db->join('transaction', 'transaction.id_transaction = transaction_detail.transaction_id');
        $this->db->join('cart', 'cart.id_cart = transaction_detail.cart_id');
        $this->db->join('product', 'product.id_product = cart.product_id');
        $this->db->join('user', 'user.id_user = cart.user_id');
        $this->db->where('user.id_user', $user_id);

        return $this->db->get()->result_array();
    }

    public function getAllIncomingOrders()
    {
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('transaction_status', 'transaction_status.id_transaction_status = transaction.transaction_status_id');
        $this->db->where('transaction_status_id', 1);
        $this->db->order_by('id_transaction', 'DESC');

        return $this->db->get()->result_array();
    }

    public function getAllOrderPacked()
    {
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('transaction_status', 'transaction_status.id_transaction_status = transaction.transaction_status_id');
        $this->db->where('transaction_status_id', 2);
        $this->db->order_by('id_transaction', 'DESC');

        return $this->db->get()->result_array();
    }

    public function getAllOrderShipped()
    {
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('transaction_status', 'transaction_status.id_transaction_status = transaction.transaction_status_id');
        $this->db->where('transaction_status_id', 3);
        $this->db->order_by('id_transaction', 'DESC');

        return $this->db->get()->result_array();
    }

    public function getAllOrderReceived()
    {
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('transaction_status', 'transaction_status.id_transaction_status = transaction.transaction_status_id');
        $this->db->where('transaction_status_id', 4);
        $this->db->order_by('id_transaction', 'DESC');

        return $this->db->get()->result_array();
    }

    public function getTransaction($id)
    {
        return $this->db->get_where('transaction', ['id_transaction' => $id])->row_array();
    }

    public function getAllTransactionDetail($transaction_id)
    {
        $this->db->select('*');
        $this->db->from('transaction_detail');
        $this->db->join('transaction', 'transaction.id_transaction = transaction_detail.transaction_id');
        $this->db->join('cart', 'cart.id_cart = transaction_detail.cart_id');
        $this->db->join('product', 'product.id_product = cart.product_id');
        $this->db->where('transaction_id', $transaction_id);

        return $this->db->get()->result_array();
    }

    public function getNotifOrder()
    {
        $this->db->where('transaction_status_id', 1);
        $this->db->from('transaction');
        return $this->db->count_all_results();
    }

    public function getCountIncomingOrders()
    {
        $this->db->where('transaction_status_id', 1);
        $this->db->from('transaction');
        return $this->db->count_all_results();
    }

    public function changeStatusIsCheckout($id_cart, $status)
    {
        $this->db->update('cart', $status, array('id_cart' => $id_cart));
        return $this->db->affected_rows();
    }

    public function changeStatusPacked($id_transaction, $status)
    {
        $this->db->update('transaction', $status, array('id_transaction' => $id_transaction));
        return $this->db->affected_rows();
    }

    public function changeStatusShipped($id_transaction, $status)
    {
        $this->db->update('transaction', $status, array('id_transaction' => $id_transaction));
        return $this->db->affected_rows();
    }

    public function changeStatusReceived($id_transaction, $status)
    {
        $this->db->update('transaction', $status, array('id_transaction' => $id_transaction));
        return $this->db->affected_rows();
    }

    public function getAllExpedition()
    {
        $this->db->select('*');
        $this->db->from('expedition');
        $this->db->order_by('id_expedition', 'DESC');

        return $this->db->get()->result_array();
    }

    public function addExpedition($data, $id_transaction)
    {
        $this->db->update('transaction', $data, ['id_transaction' => $id_transaction]);
        return $this->db->affected_rows();
    }

    public function getCountTransaction()
    {
        return $this->db->get('transaction')->num_rows();
    }
}
