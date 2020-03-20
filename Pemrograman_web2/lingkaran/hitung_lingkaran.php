<?php
echo "<center>";
echo "<h1>LUAS LINGKARAN DAN TABUNG</h1>";
include('lingkar.php');
include('Tabung.php');
$jari = $_POST['jari'];
$tinggi = $_POST['tinggi'];

$lingkar = new Lingkaran_m;
$lingkar->get_jari($jari);
echo "<h3>Luas Lingkaran<h3>";

echo "Jari -Jari : $jari  ";
echo "<br>";
echo "Luas Lingkaran :" . $lingkar->hitung_luas();
echo "<br>";
echo "<hr>";

echo "<h3>Luas Tabung<h3>";

$tabung = new Tabung_m;
$tabung->get_jari($jari);
$tabung->get_tinggi($tinggi);
echo "Jari -Jari : $jari  ";
echo "<br>";
echo "Tinggi : $tinggi  ";
echo "<br>";
echo "Luas Tabung :" . $tabung->luas_tabung();
echo "<hr>";
