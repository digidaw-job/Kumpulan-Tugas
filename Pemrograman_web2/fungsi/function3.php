<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
        <table>
            <tr>
                <td>Harga</td>
                <td> <input type="text" name="nilai" placeholder="Masukkan Niai"></td>
            </tr>
                <tr>
                <td></td>
                <td> <input type="submit" name="submit" value="Submit"> </td>
                </tr>
        </table>
    </form>
    <?php
    $nilai =$_POST['nilai'];



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
            	return $grade;
            }
            $nilai =  array(78,60,50,40,81,90);


for ($i=0; $i <=5 ; $i++) { 
	$nilai[$i] =my_grade($grade[$i]);
}for ($k=0; $k <=5 ; $k++) { 
	echo "$nilai[$k],$grade[$k]";
}
                
            
        }
        //echo "nilai : Rp.".my_grade($nilai);
     

?>
</body>
</html>