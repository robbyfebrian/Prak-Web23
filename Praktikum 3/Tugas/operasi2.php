<html>
    <head>
        <title>Program Penjumlahan 2</title>
    </head>
    <body>
        <h1>Menentukan Ganjil Genap</h1>

        <form method="POST" action="operasi2.php">
            <p>
                Masukkan Angka : <input type="text" name="nilai">
            </p>
            <p>
                <input type="submit" name="submit" value="Proses">
            </p>
        </form>

        <?php
            error_reporting(E_ALL ^ E_NOTICE);

            $nilai = $_POST["nilai"];
            $submit = $_POST["submit"];

            if($submit){
                if($nilai % 2 == 0) {
                    echo"</br>Angka $nilai adalah bilangan genap";
                } else {
                    echo"</br>Angka $nilai adalah bilangan ganjil";
                };
            };
        ?>
    </body>
</html>