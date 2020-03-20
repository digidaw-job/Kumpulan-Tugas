

			<!DOCTYPE html>
			<html>
			<head>
				<title>	</title>
			</head>
			<body>
				<h1>Tugas1 Array</h1>
			<?php
				$angka = array(20, 12, 35, 47, 26);
				$totalangka = count($angka);
				$jumlah=0;
				$hitung =0 ;
				
					for ($i = 0; $i<$totalangka; $i++) {
						if($angka[$i]%2==0){
							echo $angka[$i]."";	
							$jumlah += $angka[$i];	
							$hitung = $hitung+1;
						}	
												
					}
					echo "<hr>";
					echo "<br/>";
					echo"Jumlah Angka : $hitung";
					echo "<br/>";
					echo "Jumlah : $jumlah";
					$rata = $jumlah/$hitung;
					echo "<br/>";
					echo "Rata-Rata : $rata";
			?>	

			</body>
			</html>