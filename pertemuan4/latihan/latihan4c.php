<!DOCTYPE html>
<html>
<head>
	<title>Latihan4c</title>
</head>
<body>
	<?php

$hardware = [
            "Motherboard"   => " Papan Sirkuit komponen komputer.",
			"Processor" 	=> " Sebuah IC yang mengontrol seluruh jalannya sistem komputer.",
			"Hard Disk" 	=> " Media Penyimpanan.",
			"PC Coller" 	=> " Mengurangi panas yang di hasilkan oleh komputer.",
			"VGA Card"  	=> " Mengolah data grafik yang akan di tampilkan oleh monitor.",
			"Optical Drive" => " Membaca, maupun menulis data dari kepingan CD.",
			"Card Reader" 	=> " Untuk membaca data data yang tersimpan di dalam memory card.",
			"Modem" 		=> " Mengubah sinyal digital menjadi sinyal analog."
];
echo "<h3>Macam-macamm perangkat keras komputer dan fungsinya</h3>";
	foreach ($hardware as $hd => $h) {
		echo "$hd :$h <br>";
		}
	?>
	<h4><a href="../../index.php">back</a></h4>
</body>
</html>

