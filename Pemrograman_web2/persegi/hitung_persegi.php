<?php
echo "<center>";
echo "<h1>LUAS PERSEGI  DAN BALOK</h1>";
include('persegi.php');
include('balok.php');

$lebar = $_POST['lebar'];
$panjang = $_POST['panjang'];
$tinggi = $_POST['tinggi'];

$persegi = new Persegi_m;
$persegi->get_lebar($lebar);
$persegi->get_panjang($panjang);
echo "<h3>Luas Persegi<h3>";

echo "Lebar : $lebar  ";
echo "<br>";
echo "Panjang : $panjang  ";
echo "<br>";

echo "Luas Persegi :" . $persegi->luas_persegi();
echo "<br>";
echo "<hr>";

echo "<h3>Luas Balok<h3>";

$balok = new Balok_m;
$balok->get_lebar($lebar);
$balok->get_panjang($panjang);
$balok->get_tinggi($tinggi);
echo "Lebar : $lebar  ";
echo "<br>";
echo "Panjang : $panjang  ";
echo "<br>";
echo "Tinggi : $tinggi  ";
echo "<br>";
echo "Luas Balok:" . $balok->luas_balok();
echo "<hr>";
