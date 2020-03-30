<?php

class Herbal_c extends CI_Controller
{
    function herbal()
    {
        $this->load->view('herbal_v');
        $this->load->library('table');
    }
}
