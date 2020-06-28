<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_c extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        cek_not_login();
        cek_admin();
        $this->load->model('user_m');
        $this->load->library('form_validation');
    }





    public function index()
    {

        $data['row'] = $this->user_m->get();
        $this->template->load('template', 'user/user_data', $data);
    }
    public function add()
    {

        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules(
            'passwordconf',
            'Konfirmasi Password',
            'required|matches[password]',
            array('matches' => '%s tidak sesuai dengan Password')
        );
        $this->form_validation->set_message('required', '%s Harus Di isi');
        $this->form_validation->set_message('min_length', '%s Lenght Minimal 5 Karakter');
        $this->form_validation->set_message('is_unique', '%s  Sudah Terdaftar');

        $this->form_validation->set_error_delimiters('<span class "help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {

            $this->template->load('template', 'user/user_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil Disimpan');</script>";
            }
            echo "<script>window.location='" . site_url('user_c') . "';</script>";
        }
    }
    public function edit($id)
    {

        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_username_check');

        if ($this->input->post('password')) {

            $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
            $this->form_validation->set_rules(
                'passwordconf',
                'Konfirmasi Password',
                'matches[password]',
                array('matches' => '%s tidak sesuai dengan Password')
            );
        }

        if ($this->input->post('passwordconf')) {
            $this->form_validation->set_rules(
                'passwordconf',
                'Konfirmasi Password',
                'matches[password]',
                array('matches' => '%s tidak sesuai dengan Password')
            );
        }
        $this->form_validation->set_message('required', '%s Harus Di isi');
        $this->form_validation->set_message('min_length', '%s Lenght Minimal 5 Karakter');
        $this->form_validation->set_message('is_unique', '%s  Sudah Terdaftar');


        $this->form_validation->set_error_delimiters('<span class "help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->user_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'user/user_form_edit', $data);
            } else {
                echo "<script>alert('Data Tidak Ditemukan');";
                echo "window.location='" . site_url('user_c') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil Rubah');</script>";
            }
            echo "<script>window.location='" . site_url('user_c') . "';</script>";
        }
    }
    function username_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT *  FROM user WHERE username = '$post[username]' AND user_id != '$post[user_id]'");

        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '%s Ini Sudah Dipakai User Lain , Silahkan Ganti !!! ');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function delete()
    {
        $id = $this->input->post('user_id');
        $this->user_m->delete($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil Dihapus');</script>";
        }
        echo "<script>window.location='" . site_url('user_c') . "';</script>";
    }
}
