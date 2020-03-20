<?php

class Lingkaran

{


public $jari;

public $luas;

public function __construct($jari)

{

// Input jari

$this->jari = $jari;

// Hitung Luas

$this->hitungLuas();


}

 

public function hitungLuas()

{

$this->_luas = 3.14*$this->jari * $this->jari;

}

public function getLuas()

{

return $this->luas;

}

}

 

?>