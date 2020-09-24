<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Latihan3c</title>
    </head>
    <body>
        <?php
            function hitungLuas($r) {
                echo "<h2>Menghitung Luas Lingkaran</h2>";
                echo "Jari-jari = $r";
                echo "<br>";
                echo "Luas lingkaran = " . round(pi() * pow($r, 2)) . " cm²";
                echo "<hr>";
            }
            function hitungKeliling($r) {
                echo "<h2>Menghitung Keliling Lingkaran</h2>";
                echo "Jari-jari = $r";
                echo "<br>";
                echo "Keliling lingkaran = " . round(pi() * (2 * $r), 1) . " cm";
                echo "<hr>";
            }        
            hitungLuas(20);
            hitungKeliling(30);
        ?>
		
		<h4><a href="../index.php">back</a></h4>
    </body>
</html>