<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function login()
    {
        cek_already_login();
        $this->load->view('login');
    }
    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            // bisa pakai ini diatas atau "if(isset($_POST['login'])) tanpa  $post = $this->input->post(null, TRUE);"
            $this->load->model('user_m');
            // memanggil model user_m
            $query = $this->user_m->login($post);
            // login diambil dari nama function di model user_m dengan parameter $post sedangkan 
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'userid' => $row->user_id,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
                echo "<script>
               alert('Selamat! ,Anda Berhasil Login');
               window.location = '" . site_url('dashboard') . "'
               </script>";
            } else {
                echo "<script>
               alert('Username dan Password anda Salah, Cek Kembali Username atau Password Anda!!!');
               window.location = '" . site_url('auth/login') . "'
               </script>";
            }
        }
    }
    public function logout()
    {
        $params = array('userid', 'level');
        $this->session->unset_userdata($params);
        redirect('auth/login');
    }
}
