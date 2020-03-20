<?php
class OrangTua{

	// Pembuatan Property Protected
	protected $kadar_gula = 'Tinggi';

	// Pembuatan Method Protected
	protected function ciriFisik(){
		return 'Cara Jalan Cepat';
	}

	// Mengakses Property $kadar_gula yang di definisikan sebagai Protected
	public function kadarGulaSaya(){
		return $this->kadar_gula;
	}

	// Mengakses Method ciriFisik() yang di definisikan sebagai Protected
	public function ciriFisikSaya(){
		return $this->ciriFisik();
	}

}

// Intansiasi Object Class Parent
$Amir = new OrangTua;
?>

<h3>Parent</h3>
<p>Kadar Gula saya <?= $Amir->kadarGulaSaya() ?></p>
<p>Saya memiliki <?= $Amir->ciriFisikSaya() ?></p>
