<html>
	<head>
		<title>Data Mahasiswa</title>
	</head>
	
	<?php
		//Ini dideklarasikan di sini karena digunakan saat meload halaman
		$conn = mysqli_connect('localhost', 'root','','informatika');
		$nim = $_GET['NIM'];
		$cari = "select * from mahasiswa where NIM= '$nim'";
		$hasil_cari = mysqli_query($conn,$cari);
		$data = mysqli_fetch_array($hasil_cari);
		
		function active_radio_button($value,$input){
			$result = $value == $input? 'checked':'';
			return $result;
		}
		if($data > 0){}
	?>
	
	<body>
		<h3>FORM MAHASISWA</h3>
		<table>
			<!-- Disini menggunakan update.php untuk memasukkan kembali hasil yang baru dengan mengacu php dalam tempat yang berbeda -->
			<form method="POST" action="update.php">
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" size="10" value="<?php echo $data['NIM']?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" size="30" value="<?=$data['Nama']?>"></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td><input type="radio" checked name="kelas" value="A" <?php echo active_radio_button("A", $data['Kelas'])?>>A
						<input type="radio" name="kelas" value="B"<?php echo active_radio_button("B", $data['Kelas'])?>>B
						<input type="radio" name="kelas" value="C"<?php echo active_radio_button("C", $data['Kelas'])?>>C
						<input type="radio" name="kelas" value="D"<?php echo active_radio_button("C", $data['Kelas'])?>>D
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat" size="40" value="<?=$data['Alamat']?>"></td>
				</tr>
				<tr>
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