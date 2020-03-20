<?php

class Lingkaran_m
{

  //const PI = 3.14;

  public $jari;

  public function set_jari($jari)
  {
    $this->jari = $jari;
  }

  public function get_jari($jari)
  {
    return $this->jari = $jari;
  }

  public function hitung_luas()
  {
    $hitung = 3.14 * ($this->jari * $this->jari);
    return $hitung;
  }
}
