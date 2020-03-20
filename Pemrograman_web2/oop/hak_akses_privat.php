<?php
class Mobil {

	private $nomor_seri = 'A77FFH';

	private function speed(){
		return '500km/jam';
	}

	public function nomor_seri(){
		return $this->nomor_seri;
	}
}

$Nissan = new Mobil;
?>

<p>Nomor seri Mobil Nissan = <?= $Nissan->nomor_seri() ?></p>
