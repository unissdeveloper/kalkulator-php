<?php include 'fungsi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kalkulator</title>
</head>
<body>
	
	<form method="post">
		<input type="number" name="number_1" placeholder="Masukkan Angka Pertama"> <br>
		<input type="number" name="number_2" placeholder="Masukkan Angka Kedua"> <br>
		<button type="submit" name="btnAdd">Jumlahkan</button>
		<button type="submit" name="btnSubtract">Kurangkan</button>
		<button type="submit" name="btnMultiple">Kalikan</button>
		<button type="submit" name="btnDivide">Bagikan</button>
	</form>

	<h1>
		<?php
			if (isset($_POST['btnAdd'])) {

				add($_POST['number_1'], $_POST['number_2']);

			} elseif (isset($_POST['btnSubtract'])) {

				subtract($_POST['number_1'], $_POST['number_2']);

			} elseif (isset($_POST['btnMultiple'])) {

				multiple($_POST['number_1'], $_POST['number_2']);
				
			} elseif (isset($_POST['btnDivide'])) {

				divide($_POST['number_1'], $_POST['number_2']);
				
			}
		?>
	</h1>

</body>
</html>