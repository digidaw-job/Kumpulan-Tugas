<?php
// mmbuat fungsi
function perkenalan($nama, $salam){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Aisyah", "Hai");

  echo "<hr>";

  $saya = "Abdulloh";
  $ucapanSalam = "Ahlan wa sahlan";
  // memanggilnya lagi
  perkenalan($saya, $ucapanSalam);
?>

