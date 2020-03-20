<?php
class Manusia{

    // property declaration
    public $telinga = 'caplang';
    public $usia = 22;

}
$Amir 	= new Manusia;
?>

<p>Hai, nama saya Amir, saya memiliki telinga <?= $Amir->telinga ?>, usia saya <?= $Amir->usia ?> tahun. </p>

<?php
class Manusia1{

    // method declaration
    public function berjalan() {
        echo 'berjalan';
    }
}
$Amir 	= new Manusia1;
?>

<p>Saya Amir, Saya dapat <?= $Amir->berjalan() ?>.</p>

