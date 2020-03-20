<?php
class Hamba{

	// Pembuatan Property
	public $nama = '';

	// Pembuatan Method
	public function jalan(){
		return 'Menggunakan kaki, secara bergantian.';
	}
}

// Intansiasi Object
$Manusia = new Hamba;
?>

<p>Hai, nama saya <?= $Manusia->nama = 'Amir'; ?></p>
<p>Saya berjalan dengan <?= $Manusia->jalan(); ?> </p>
