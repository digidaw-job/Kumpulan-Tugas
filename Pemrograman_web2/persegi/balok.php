<?php

class Balok_m extends Persegi_m
{


    public $tinggi;

    public function set_tinggi($tinggi)
    {
        $this->tinggi = $tinggi;
    }

    public function get_tinggi($tinggi)
    {
        return $this->tinggi = $tinggi;
    }

    public function luas_balok()
    {
        $hitung = $this->lebar * $this->panjang * $this->tinggi;
        return $hitung;
    }
}
