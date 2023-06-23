<?php
	$conn= mysqli_connect('localhost', 'root', '','informatika');
	$nim= $_POST['nim'];
	$nama= $_POST['nama'];
	$kelas= $_POST['kelas'];
	$alamat= $_POST['alamat'];
	$submit= $_POST['submit'];
	$update="UPDATE mahasiswa SET NIM='$nim', Nama='$nama', Kelas='$kelas', Alamat='$alamat' WHERE nim='$nim' ";
	
	if($submit){
			mysqli_query($conn,$update);
			echo "
			<script>
			alert('data berhasil di update');
			document.location.href='form.php';
			</script>";
	}
?>