<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Latihan3b</title>
        <style>
            .kotak {
            padding: 7px;
            border: 1px solid black;

            }
        </style>
    </head>
    <body>
        <?php
            $GLOBALS['Isset'] = "Isset() : Fungsi isset pada PHP ini akan mengembalikan sebuah nilai boolean (false) jika variabel yang kita cek tidak memiliki nilai, atau nilainya NULL.<br><br>";
            $GLOBALS['Empty'] = "Empty() : Dilakukan untuk melakukan pemeriksaan apakan suatu variabel sudah terisi atau belum.";
            function soal($style){
                echo "<div class='$style'>" . $GLOBALS['Isset'] . $GLOBALS['Empty'] . "</div>";
            }
            soal("kotak");
        ?>
		<br>
		<h4><a href="../index.php">back</a></h4>
    </body>
</html>