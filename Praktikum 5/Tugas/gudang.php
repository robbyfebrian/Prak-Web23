<html>
	<head>
		<title>DATA GUDANG</title>
	</head>

	<?php
	$conn= mysqli_connect('localhost', 'root', '','database_gudang');
	?>

	<body>
		<h3>Tambah Data Gudang</h3>
        <table border='0' width='30%'>
        <form method='post' action='gudang.php'>
                <tr>
                    <td width='25%'>Kode</td>
                    <td width='5%'>:</td>
                    <td width='65%'><input type='text' name='kode' size='10'></td>
                </tr>
                
                <tr>
                    <td width='25%'>Nama</td>
                    <td width='5%'>:</td>
                    <td width='65%'><input type='text' name='nama' size='30'></td>
                </tr>
                
                <tr>
                    <td width='25%'>Lokasi</td>
                    <td width='5%'>:</td>
                    <td width='65%'><input type="text" name="lokasi" size='255'></td>
                </tr>
                
                <tr>
                    <td>&nbsp</td>
                    <td>&nbsp</td>
                    <td><input type='submit' value='Masukan' name='submit'></td>
                </tr>
            </table>
        </form>
        
        <?php
            error_reporting(E_ALL ^ E_NOTICE);
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $lokasi = $_POST['lokasi'];
            $submit = $_POST['submit'];
            $input = "INSERT INTO gudang (kode_gudang, nama_gudang, lokasi_gudang) VALUES ('$kode', '$nama', '$lokasi')";
            
            if ($submit){
                if ($kode==''){
                echo "</br>Kode Gudang tidak boleh kosong";
                } elseif ($nama==''){
                echo "</br>Nama Gudang tidak boleh kosong";
                } elseif ($lokasi==''){
                echo "</br>Lokasi Gudang tidak boleh kosong";
                } else {
                mysqli_query($conn, $input);
                echo "</br>Data Berhasil dimasukkan";
                }
            }
        ?>
        
        <hr>
        <h3>Data Gudang</h3>
        <table border='1' width='60%'>
            <tr>
                <td align='center' width='10%'><b>Kode</b></td>
                <td align='center' width='30%'><b>Nama</b></td>
                <td align='center' width='40%'><b>Lokasi</b></td>
				<td colspan='2' align='center' width='10%'><b>Atribut</b></td>
            </tr>
            
            <?php
            $cari = "SELECT * from gudang ORDER BY kode_gudang";
            $hasil_cari = mysqli_query($conn, $cari);
            while ($data = mysqli_fetch_row($hasil_cari)){
                echo"
                <tr>
					<td width='10%'>$data[0]</td>
					<td width='30%'>$data[1]</td>
					<td width='40%'>$data[2]</td>
					<td width='5%'><a href='form_gudang_update.php?kode_gudang=$data[0]'>Ubah Data</a></td>
					<td width='5%'><a href='gudang_delete.php?kode_gudang=$data[0]'>Hapus Data</a></td>
                </tr>";
            }
            ?>
        </table>
        </center>
	</body>
</html>