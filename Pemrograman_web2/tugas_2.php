<html>

<head>
	<title>Bansal Canteen's</title>
</head>

<body>
	<FORM method="POST" action="">
		<table border="1">
			<tr>
				<td>Foods</td>
				<td>Drinks</td>
			</tr>
			<tr>
				<td>
					<select name="foods[]" size="5" multiple="multiple">
						<option value="10000">Fried Rice Rp.10.000</option>
						<option value="15000">Chiken Satay Rp.15.000</option>
						<option value="25000">Spagetty Rp 25.000</option>
					</select>

				</td>
				<td>
					<input type="checkbox" name="drink[]" value="10000">Juice Rp 10.000<br>
					<input type="checkbox" name="drink[]" value="5000">Coffee Rp 5.000<br>
					<input type="checkbox" name="drink[]" value="6000">Iced Tea Rp. 6.000<br>
					<input type="checkbox" name="drink[]" value="8000">Coconut Iced Rp. 8.000<br>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table><br><br><br>
	</FORM>
	<?php

	if (isset($_POST["submit"])) {

		$for_queryfoods = '';
		$jumlahfoods = 0;
		if (!empty($_POST["foods"])) {

			foreach ($_POST["foods"] as $foods) {

				$for_queryfoods .= $foods . "<br>";
				$jumlahfoods += $foods;
			}
		}
	} else {
		echo "<label class='text-danger'>Gagal Memilih foods</label>";
	}
	?>

	<?php
	

	if (isset($_POST["submit"])) {

		$for_query = '';
		$jumlah = 0;
		if (!empty($_POST["drink"])) {

			foreach ($_POST["drink"] as $drink) {

				$for_query .= $drink . "<br>";
				$jumlah += $drink;
			}
		}
	} else {
		echo "<label class='text-danger'>Gagal Memilih drink</label>";
	}

	?>

	<?php
	$total = $jumlah + $jumlahfoods;
	?>

	


		<table border="1">
			<tr>
				<td>foods</td>
				<td>drink</td>
			</tr>
			<tr>
				<td>
					<?php echo $for_queryfoods; ?>
				</td>
				<td>
					<?php echo $for_query; ?>
				</td>
			</tr>
			<tr>
				<td><?php echo $jumlahfoods; ?></td>
				<td><?php echo $jumlah; ?></td>
			</tr>
			<tr>
				<td>Total</td>
				<td><?php echo $total; ?></td>
			</tr>
		</table>
	</FORM>
</body>

</html>