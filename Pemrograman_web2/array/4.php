<?php 
$kitab = array(array('tauhid','ibnu qayim',100),
			array('fiqh','masail',10),
			array('shiroh','sejarah nabi',4));

				
 echo "| ". $kitab[0][0]." | ". $kitab[0][1]."|</br>";
 echo '| '. $kitab[1][0].' | '. $kitab[1][1].'|</br>';
 echo '| '. $kitab[2][0].' | '. $kitab[2][1].'|</br>';
 echo "<br>";
 for ($brs=0; $brs <3 ; $brs++) { 
 	for ($kol=0; $kol <3	 ; $kol++) { 
 		echo '| '.$kitab[$brs][$kol];
 	}
 	echo "|</br>";
 }










 ?>