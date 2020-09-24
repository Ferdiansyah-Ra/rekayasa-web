<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Latihan3d</title>
    </head>
    <body>
        <?php
            function urutanAngka ($angka){
            static $num = 1;
            for ($i=1; $i <= $angka; $i++) { 
                for ($j=1; $j <= $i; $j++) { 
                 echo "$num ";
                   $num++;
                    }
              echo "<br>";
                }
            }
            echo urutanAngka(5);
        ?>
		
	<h4><a href="../index.php">back</a></h4>
</body>
</html>