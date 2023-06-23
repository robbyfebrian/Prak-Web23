<?php
	session_start();
	error_reporting(E_ALL^E_NOTICE^E_DEPRECATED^E_WARNING);
	$conn = mysqli_connect('localhost', 'root', '', 'informatik');
	// mysql_select_db('informatika');

	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$submit = $_POST['submit'];

	if($submit){
		$sql = "select * from pengguna where Username='$Username' and Password = '$Password'";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		if($row['Username']!=""){
			//berhasil login
			$_SESSION['Username']=$row['Username'];
			$_SESSION['Status']=$row['Status'];
			?>
			<script language script="JavaScript">
				alert('Anda login sebagai <?php echo $row['Username']; ?>');
				document.location='hasillogin.php';
			</script>
		<?php 
} else {
			//gagal login
			?>
			<script language script="JavaScript">
				alert('Gagal Login');
				document.location='login.php';
			</script>
			<?php
		}
	}
?>
<form method="post" action="login.php">
	<p align="center">
		Username : <input type="text" name="Username"><br></br>
		Password : <input type="Password" name="Password"><br></br>
		<input type="submit" name="submit">
	</p>
</form>