<?php


function my_grade($nilai) {
             $grade;
            if ($nilai >= 80 && $nilai<=100) {
                $grade ="A";
            }elseif ($nilai >= 66 && $nilai <=79.99) {
            	$grade = "B";
            }elseif ($nilai >= 56 && $nilai <=65.99) {
            	$grade = "C";
            }elseif ($nilai >= 0 && $nilai <=45.99) {
            	$grade = "D";
            }else{
            	$grade = "O";
            	
            }
            //$nilai[] {78,60,50,40,81,90}
            
               return $grade; 
            
        }
        //echo "nilai : Rp.".my_grade($nilai);
     


?>
<?php 	

$nilai =  array(78,60,50,40,81,90);


for ($i=0; $i <=5 ; $i++) { 
	 $grade[$i] = my_grade($nilai[$i]);
}for ($k=0; $k <=5 ; $k++) { 
	echo ("$nilai[$k] - $grade[$k]");
	echo "<p>";
}
 ?>