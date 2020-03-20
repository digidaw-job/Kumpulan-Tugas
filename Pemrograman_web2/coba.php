<?php 
$food = array(array('Nasi Goreng','Rp.10000',10000),
			array('Sate Kambing','Rp.20000',20000),
			array('Tongseng','Rp.25000',25000));

				
 echo "| ". $food[0][2]." </br>";
 echo '| '. $food[1][0].' | '. $food[1][1].'|</br>';
 echo '| '. $food[2][0].' | '. $food[2][1].'|</br>';
 echo "<br>";
 for ($brs=0; $brs <3 ; $brs++) { 
 	for ($kol=0; $kol <3	 ; $kol++) { 
 		echo '| '.$food[$brs][$kol];
 	}
 	echo "|</br>";
 }










 ?>