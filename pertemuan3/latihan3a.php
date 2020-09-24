<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Latihan3a</title>
        <style>
            .ganti_style {
                font-style: italic;
                font-weight: bold; 
                font-size: 28px;
                font-family: arial;
                color: #8c782d;               
                padding: 5px;
                text-align:center;
                margin-left:250px;
            }
            .box_model {
                border-radius: 5px;
                margin: 20px 0 0 20px;
                border: 1px solid black;
                height: 30px;
                width: 500px;
                margin-left: 50px;
                box-shadow: 1px 1px 15px rgba(0, 0, 0.5);
            }
        </style>
    </head>
    <body>
        <?php
            function gantiStyle ($tulisan, $style1, $style2){
                echo "<div class='$style1 $style2'>$tulisan</div>";
            }
            gantiStyle("Selamat Datang di Praktikum 2019", "ganti_style", "box_model");
        ?>
		<br>
		<h4><a href="../index.php">Back</a></h4>
    </body>
</html>