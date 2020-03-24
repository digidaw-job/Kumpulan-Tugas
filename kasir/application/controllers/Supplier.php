<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        cek_not_login();
        //cek_admin();
        $this->load->model('supplier_m');
    }




    public function index()
    {
        $data['row'] = $this->supplier_m->get();
        $this->template->load('template', 'supplier/supplier_data', $data);
    }



    public function add()
    {
        $supllier = new stdClass();
        $supllier->supplier_id = null;
        $supllier->name = null;
        $supllier->phone = null;
        $supllier->address = null;
        $supllier->description = null;
        $data = array(
            'page' => 'add',
            'row' => $supllier
        );
        $this->template->load('template', 'supplier/supplier_form', $data);
    }

    public function edit($id)

    {
        $query = $this->supplier_m->get($id);
        if ($query->num_rows() > 0) {
            $supplier = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $supplier
            );
            $this->template->load('template', 'supplier/supplier_form', $data);
        } else {
            echo "<script>alert('Data Tidak Ditemukan');";
            echo "window.location='" . site_url('supplier') . "';</script>";
        }
    }


    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->supplier_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->supplier_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil Ditambahkan');</script>";
        }
        echo "<script>window.location='" . site_url('supplier') . "';</script>";
    }


    public function del($id)
    {
        $this->supplier_m->del($id);
        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil Dihapus');</script>";
        }
        echo "<script>window.location='" . site_url('supplier') . "';</script>";
    }
}
