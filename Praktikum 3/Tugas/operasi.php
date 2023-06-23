<html>
    <head>
        <title>Program Penjumlahan</title>
    </head>
    <body>
        <h1>Proses Penjumlahan</h1>

        <form method="POST" action="operasi.php">
            <p>
                Nilai A adalah <input type="text" name="nilai_a">
            </p>
            <p>
                Nilai B adalah <input type="text" name="nilai_b">
            </p>
            <p>
                <input type="submit" name="submit" value="Jumlahkan">
            </p>
        </form>

        <?php
            error_reporting(E_ALL ^ E_NOTICE);

            $nilai_a = $_POST["nilai_a"];
            $nilai_b = $_POST["nilai_b"];
            $submit = $_POST["submit"];

            if($submit){
                $nilai_x = $nilai_a+$nilai_b;
                echo"</br>Nilai A adalah $nilai_a";
                echo"</br>Nilai B adalah $nilai_b";
                echo"</br>Jadi nilai A ditambah nilai B adalah $nilai_x";
            };
        ?>
    </body>
</html>