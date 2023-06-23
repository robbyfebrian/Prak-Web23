<html>
	<head>
		<title>Data Gudang</title>
	</head>
	
	<?php
		//Ini dideklarasikan di sini karena digunakan saat meload halaman
		$conn = mysqli_connect('localhost', 'root','','database_gudang');
		$kode = $_GET['kode_gudang'];
		$cari = "SELECT * FROM gudang WHERE kode_gudang='$kode'";
		$hasil_cari = mysqli_query($conn,$cari);
		$data = mysqli_fetch_array($hasil_cari);
	?>
	
	<body>
		<h3>Data Gudang</h3>
		<table>
			<!-- Disini menggunakan update.php untuk memasukkan kembali hasil yang baru dengan mengacu php dalam tempat yang berbeda -->
			<form method="POST" action="gudang_update.php">
				<tr>
					<td>Kode</td>
					<td>:</td>
					<td><input type="text" name="kode" size="10" value="<?php echo $data['kode_gudang']?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" size="30" value="<?=$data['nama_gudang']?>"></td>
				</tr>
				<tr>
					<td>Lokasi</td>
					<td>:</td>
					<td><input type="text" name="lokasi" size="30" value="<?=$data['lokasi_gudang']?>"></td>
				</tr>
					<td>&nbsp</td>
				</tr>
				<tr>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td><input type="submit" name="submit" value="UPDATE DATA"></td>
				</tr>
				</form>
			</table>

	</body>
</html>