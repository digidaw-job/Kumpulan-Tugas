<?php

/**
 * 
 */
class Segitiga_c extends CI_Controller
{

    public function Index()
    {
        $judul['jdl1'] = "alas";
        $judul['jdl2'] =  "tinggi";
        $this->load->view('segitiga_v', $judul);
    }

    function Hitung()
    {
        $alas = $this->input->post('alas');
        $tinggi = $this->input->post('tinggi');
        $data['luas'] = 0.5 * ($alas * $tinggi);
        $this->load->view('segitiga_h', $data);
    }
}
