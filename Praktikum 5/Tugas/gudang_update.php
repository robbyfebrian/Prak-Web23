<?php
	$conn= mysqli_connect('localhost', 'root', '','database_gudang');
	$kode= $_POST['kode'];
	$nama= $_POST['nama'];
	$lokasi= $_POST['lokasi'];
	$submit= $_POST['submit'];
	$update="UPDATE gudang SET kode_gudang='$kode', nama_gudang='$nama', lokasi_gudang='$lokasi' WHERE kode_gudang='$kode'";
	
	if($submit){
			mysqli_query($conn,$update);
			echo "
			<script>
			alert('data berhasil di update');
			document.location.href='gudang.php';
			</script>";
	}
?>