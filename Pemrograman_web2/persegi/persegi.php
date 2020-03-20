<?php
class Persegi_m 
{

    public $lebar;
    public $panjang;

    public function set_lebar($lebar)
    {
        $this->lebar = $lebar;
    }

    public function get_lebar($lebar)
    {
        return $this->lebar = $lebar;
    }
    public function set_panjang($panjang)
    {
        $this->panjang = $panjang;
    }

    public function get_panjang($panjang)
    {
        return $this->panjang = $panjang;
    }
    //METODE UNTUK MENGHITUNG LUAS TABUNG
    public function luas_Persegi()
    {
        $hitung =  $this->lebar * $this->panjang;
        return $hitung;
    }
}
