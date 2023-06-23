<?php
session_start();
echo "Anda berhasil login sebagai ".$_SESSION['Username']." Dan anda terdaftar sebagai ".$_SESSION['Status'];
?>
<br>
Silahkan logout dengan klik <a href='logout.php'> Disini </a>