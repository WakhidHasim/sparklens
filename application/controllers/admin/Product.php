<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_admin_role();
        $this->load->model('M_product', 'm_product');
        $this->load->model('M_transaction', 'm_transaction');
    }

    public function index()
    {
        $data = [
            'title' => 'Product',
            'page' => 'pages/admin/product/index',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'products' => $this->m_product->getAllProduct(),
            'notif_orders' => $this->m_transaction->getNotifOrder()
        ];

        $this->load->view('layouts/admin/app', $data, false);
    }

    public function addProduct()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Add Product',
                'page' => 'pages/admin/product/create',
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'notif_orders' => $this->m_transaction->getNotifOrder()
            ];

            $this->load->view('layouts/admin/app', $data, false);
        } else {
            $slug = url_title($this->input->post('name'), 'dash', TRUE);
            $photo = $_FILES['photo']['name'];

            if ($photo) {
                $config['upload_path'] = './asset/images/product/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '5000';
                $config['file_name'] = $photo;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('photo')) {
                    $photo = $this->upload->data('file_name');
                }
            }

            $data = [
                "name" => $this->input->post('name', true),
                "slug" => $slug,
                "photo" => $photo,
                "description" => $this->input->post('description', true),
                "price" => $this->input->post('price', true),
                "stock" => $this->input->post('stock', true)
            ];

            $this->m_product->addProduct($data);
            $this->session->set_flashdata('success', 'Product Added Successfully!');
            redirect('admin/product');
        }
    }

    public function editProduct($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Edit Product',
                'page' => 'pages/admin/product/edit',
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'product' => $this->m_product->getProduct($id),
                'notif_orders' => $this->m_transaction->getNotifOrder()
            ];

            $this->load->view('layouts/admin/app', $data, false);
        } else {
            $data['product'] = $this->m_product->getProduct($id);

            $slug = url_title($this->input->post('name'), 'dash', TRUE);
            $photo = $_FILES['photo']['name'];

            if ($photo) {
                $config['upload_path'] = './asset/images/product/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '5000';
                $config['file_name'] = $photo;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('photo')) {
                    $old_photo = $data['product']['photo'];

                    if ($old_photo) {
                        unlink(FCPATH . 'asset/images/product/' . $old_photo);
                    }

                    $new_photo = $this->upload->data('file_name');
                    $this->db->set('photo', $new_photo);
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $photo = $data['product']['photo'];
            }

            $data = [
                "name" => $this->input->post('name', true),
                "slug" => $slug,
                "photo" => $photo,
                "description" => $this->input->post('description', true),
                "price" => $this->input->post('price', true),
                "stock" => $this->input->post('stock', true)
            ];

            $this->m_product->editProduct($data, $id);
            $this->session->set_flashdata('success', 'Product Successfully Edited!');
            redirect('admin/product');
        }
    }

    public function deleteProduct($id)
    {
        $data['product'] = $this->m_product->getProduct($id);

        unlink(FCPATH . 'asset/images/product/' . $data['product']['photo']);

        if (!empty($data['product']['glb'])) {
            unlink(FCPATH . 'asset/glb_files/' . $data['product']['glb']);
        }

        $this->m_product->deleteProduct($id);
        $this->session->set_flashdata('success', 'Product Successfully Deleted!');
        redirect('admin/product');
    }

    public function addGlbToProduct($id_product)
    {
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('scale', 'Scale', 'required');
        $this->form_validation->set_rules('rotation', 'Rotation', 'required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Edit Glb File',
                'page' => 'pages/admin/product/add_glb',
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'product' => $this->m_product->getProduct($id_product),
                'notif_orders' => $this->m_transaction->getNotifOrder()
            ];

            $this->load->view('layouts/admin/app', $data, false);
        } else {
            $data['product'] = $this->m_product->getProduct($id_product);

            $file_data = null;

            if (!empty($_FILES['glb']['name'])) {
                $config['upload_path'] = './asset/glb_files/';
                $config['allowed_types'] = '*';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('glb')) {
                    $file_data = $this->upload->data();

                    $old_glb = $data['product']['glb'];

                    if ($old_glb) {
                        unlink(FCPATH . 'asset/glb_files/' . $old_glb);
                    }

                    $data['product']['glb'] = $this->upload->data('file_name');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('admin/product');
                }
            }

            $data = [
                "glb" => $data['product']['glb'],
                "position" => $this->input->post('position', true),
                "scale" => $this->input->post('scale', true),
                "rotation" => $this->input->post('rotation', true)
            ];

            $this->m_product->editProduct($data, $id_product);

            $this->session->set_flashdata('success', 'File GLB Edited Successfully!');
            redirect('admin/product');
        }
    }
}
