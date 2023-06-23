<?php
	$conn= mysqli_connect('localhost', 'root', '','database_gudang');
	
	$kode=$_GET['kode_gudang'];
	$hapus="DELETE FROM gudang WHERE kode_gudang='$kode'";
	$data=mysqli_query($conn,$hapus);
	
	if($data > 0){
		echo "
		<script>
		alert('data berhasil di hapus');
		document.location.href='gudang.php';
		</script>";
	} else
		echo "
		<script>
		alert('data gagal di hapus');
		document.location.href='gudang.php';
		</script>";
?>