<html>
	<title>Pantauan Covid19</title>
	<style>
		.button {
		  background-color: #4CAF50; /* Green */
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		}
		input[type=text],select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  box-sizing: border-box;
		}
	</style>
	<body>
		<br>
		<center><h2>Masukkan data</h2></center><br>
		<hr>
		<br>
		<form action="db.php" method="post">
			<label>Nama Wilayah : </label>
			<select name="wilayah" required="">
				<option>=== Pilih Wilayah ===</option>
				<option value="DKI Jakarta"> DKI Jakarta</option>
				<option value="Jawa Barat"> Jawa Barat</option>
				<option value="Banten"> Banten</option>
				<option value="Jawa Tengah">Jawa Tengah</option>
			</select><br><br>
			<label>Jumlah Positif : </label>
			<input type="text" name="positif" required=""/><br><br>
			<label>Jumlah Dirawat : </label>
			<input type="text" name="dirawat" required=""/><br><br>
			<label>Jumlah Sembuh : </label>
			<input type="text" name="sembuh" required=""/><br><br>
			<label>Jumlah Meninggal : </label>
			<input type="text" name="maninggal" required=""/><br><br>
			<label>Nama Operator : </label>
			<input type="text" name="operator" required=""/><br><br>
			<label>NIM Mahasiswa : </label>
			<input type="text" name="nim" required=""/><br><br>
			<button style="background-color: blue; color:white;" class="button"> Simpan </button>
		</form>
	</body>
</html>