<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('M_cart', 'm_cart');
        $this->load->model('M_product', 'm_product');
    }

    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        $id_cart = $this->input->post('id_cart');

        $data = [
            'title' => 'Cart',
            'page' => 'pages/landing/cart/index',
            'cart' => $this->m_cart->getItemCart($id_cart),
            'carts' => $this->m_cart->getAllItemCart($id_user),
            'count_items' => $this->m_cart->getCountItemCart($id_user),
            'grandtotal' => $this->m_cart->getGrandTotal($id_user)
        ];

        $this->load->view('layouts/landing/app', $data, false);
    }

    public function addItemCart()
    {
        $user_id = $this->session->userdata('id_user');
        $product_id = $this->input->post('product_id');
        $price = $this->m_cart->getProduct($product_id);
        $page = $this->input->post('page');


        $checkProductInCart = $this->m_cart->checkProductInCart($user_id, $product_id);

        if (!$checkProductInCart) {
            $data = [
                "user_id" => $user_id,
                "product_id" => $product_id,
                "qty" => $this->input->post('qty', true),
                "subtotal" => $price['price'] * $this->input->post('qty', true),
                "is_checkout" => 0
            ];

            $this->m_cart->addItemCart($data);
            $this->session->set_flashdata('success', 'Cart Added Successfully!');

            if ($page === 'home') {
                redirect('#latest_product');
            } else if ($page === 'products') {
                redirect('products');
            } else {
                $slug = $this->input->post('slug');
                redirect('product/' . $slug . '');
            }
        } else {
            $this->session->set_flashdata('success', 'The product is already available in the cart!');
            if ($page === 'home') {
                redirect('#latest_product');
            } else if ($page === 'products') {
                redirect('products');
            } else {
                $slug = $this->input->post('slug');
                redirect('product/' . $slug . '');
            }
        }
    }

    public function editQtyItemCart($id)
    {
        $data = [
            "qty" => $this->input->post('qty', true),
            "subtotal" => $this->input->post('qty') * $this->input->post('price')
        ];

        $this->m_cart->editQtyItemCart($data, $id);
        $this->session->set_flashdata('success', 'Qty Item Cart Successfully Edited!');
        redirect('cart');
    }

    public function deleteItemCart($id)
    {
        $this->m_cart->deleteItemCart($id);
        $this->session->set_flashdata('success', 'Cart Item Successfully Deleted!');
        redirect('cart');
    }
}
