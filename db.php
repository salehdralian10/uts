<?php
	$wilayah = $_POST['wilayah'];
	$positif = $_POST['positif'];
	$dirawat = $_POST['dirawat'];
	$sembuh = $_POST['sembuh'];
	$maninggal = $_POST['maninggal'];
	$operator = $_POST['operator'];
	$nim = $_POST['nim'];
	$date = new DateTime;
?>

<html>
	<title> Pantauan Covid19 </title>
	<style>
		#customers {
		  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		#customers td, #customers th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: blue;
		  color: white;
		}
		a:link, a:visited {
		  background-color: #f44336;
		  color: white;
		  padding: 14px 25px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		}

		a:hover, a:active {
		  background-color: green;
		}
	</style>
	<body>
		<br>
		<center>Data Pemantauan Covid19 wilayah <?php echo"$wilayah"; ?></center>
		<center>Per <?php echo $date->format('d F Y H:i:s'); ?></center>
		<center><?php echo $operator; ?> / <?php echo $nim; ?></center>
		<br>
		<hr>
		<br>
		<a href="index.php" style="background-color:green; color:white;">Input Data Baru</a>
		<br>
		<br>
		<center>
			<table border="1" style="text-align: center;width: 100%;" id="customers">
				<thead>
					<th>Positif</th>
					<th>Dirawat</th>
					<th>Sembuh</th>
					<th>Meninggal</th>
				</thead>
				<tbody>
					<td><?php echo $positif; ?></td>
					<td><?php echo $dirawat; ?></td>
					<td><?php echo $sembuh; ?></td>
					<td><?php echo $maninggal; ?></td>
				</tbody>
			</table>
		</center>
	</body>
</html>