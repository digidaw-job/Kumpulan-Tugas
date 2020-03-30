<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        cek_not_login();
        //cek_admin();
        $this->load->model('category_m');
    }




    public function index()
    {
        $data['row'] = $this->category_m->get();
        $this->template->load('template', 'product/category/category_data', $data);
    }



    public function add()
    {
        $category = new stdClass();
        $category->category_id = null;
        $category->name = null;

        $data = array(
            'page' => 'add',
            'row' => $category
        );
        $this->template->load('template', 'product/category/category_form', $data);
    }

    public function edit($id)

    {
        $query = $this->category_m->get($id);
        if ($query->num_rows() > 0) {
            $category = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $category
            );
            $this->template->load('template', 'product/category/category_form', $data);
        } else {
            echo "<script>alert('Data Tidak Ditemukan');";
            echo "window.location='" . site_url('category') . "';</script>";
        }
    }


    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->category_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->category_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil Ditambahkan');</script>";
        }
        echo "<script>window.location='" . site_url('category') . "';</script>";
    }


    public function del($id)
    {
        $this->category_m->del($id);
        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil Dihapus');</script>";
        }
        echo "<script>window.location='" . site_url('category') . "';</script>";
    }
}