<?php
$nilai = $value_nilai = array(20,12,35,47,26);
$total = $nilai[0]+$nilai[1]+$nilai[2]+$nilai[3]+$nilai[4];
//echo "$nilai[0]" ;
//echo "$nilai[1]";
//echo "$nilai[4]";
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<td>Nilai1</td>
		<td>Nilai2</td>
		<td>Nilai3</td>
		<td>Jumlah Nilai</td>
		<td>Rata Rata</td>

	</tr>

	
	<tr>
		<td><?php echo "$nilai[0]"; ?></td>
		<td><?php echo "$nilai[1]"; ?></td>
		<td><?php echo "$nilai[4]"; ?></td>
		<td><?php echo $nilai[0]+$nilai[1]+$nilai[4]?></td>
		<td><?php echo $nilai[0]+$nilai[1]+$nilai[4]/3?></td>

	</tr>
	
</table>
</body>
</html>