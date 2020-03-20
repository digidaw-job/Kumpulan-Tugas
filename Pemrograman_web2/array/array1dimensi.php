<?php
$harga = array('kitab'=>100, 'sajadah'=>10, 'topi songkok'=>4);

echo $harga['kitab']." | " ;
echo $harga['sajadah']." | ";
echo $harga['topi songkok'] ." | <br> ";		

foreach ($harga as $key => $value) {
echo $key." – ".$value."<br />";
}

?>

