<?php
class Tabung_m extends Lingkaran_m
{



    public $jari;
    public $tinggi;

    public function set_jari($jari)
    {
        $this->jari = $jari;
    }

    public function get_jari($jari)
    {
        return $this->jari = $jari;
    }
    public function set_tinngi($tinggi)
    {
        $this->tinggi = $tinggi;
    }

    public function get_tinggi($tinggi)
    {
        return $this->tinggi = $tinggi;
    }
    //METODE UNTUK MENGHITUNG LUAS TABUNG
    public function luas_tabung()
    {
        $hitung = 3.14 * ($this->jari * $this->jari) * $this->tinggi;
        return $hitung;
    }
}
