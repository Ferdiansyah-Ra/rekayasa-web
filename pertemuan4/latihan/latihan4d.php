<?php 
$a  =[
[
	"no" => "1",
	"nama perangkat" => "Motherboard",
	"fungsi" => "Papan Sirkuit komponen komputer",
	"harga baru" => "Rp. 500000",
	"harga sekon" => "Rp. 200000"
],
[
	"no" => "2",
	"nama perangkat" => "Processor",
	"fungsi" => "Sebuah IC yang mengontrol seluruh jalannya sistem komputer",
	"harga baru" => "Rp. 300000",
	"harga sekon" => "Rp. 200000"
],
[
	"no" => "3",
	"nama perangkat" => "Hard Disk",
	"fungsi" => "Media penyimpanan sekunder",
	"harga baru" => "Rp. 500000",
	"harga sekon" => "Rp. 200000"
],
[
	"no" => "4",
	"nama perangkat" => "Coller",
	"fungsi" => "Mengurangi panas yang dihasilkan komputer",
	"harga baru" => "Rp. 200000",
	"harga sekon" => "Rp. 100000"
],
[
	"no" => "5",
	"nama perangkat" => "VGA Card ",
	"fungsi" => "Mengolah data grafik yang akan ditampilkan oleh monitor",
	"harga baru" => "Rp. 900000",
	"harga sekon" => "Rp. 800000"
],
[
	"no" => "6",
	"nama perangkat" => "Optical Drive",
	"fungsi" => "Membaca, Maupun menulis data dari kepingan CD",
	"harga baru" => "Rp. 500000",
	"harga sekon" => "Rp. 300000"
],
[
	"no" => "7",
	"nama perangkat" => "Card Reader",
	"fungsi" => "Untuk membaca data-data yang tersimpan didalam memory card ",
	"harga baru" => "Rp. 10000",
	"harga sekon" => "Rp. 5000"
],
[
	"no" => "8",
	"nama perangkat" => "Modem",
	"fungsi" => "Mengubah sinyal digital menjadi analog",
	"harga baru" => "Rp. 200000",
	"harga sekon" => "Rp. 150000"
]
];
$kata = ["#" , "Rp. 3410000" , "Rp. 2255000"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>latihan 4d</title>
</head>
<body>

	<table border="1" cellpadding="1" cellspacing="0">
		<tr align="center">
			<td><br>No<br></td>
			<td>Nama Perangkat</td>
			<td>Fungsi</td>
			<td>Harga Baru</td>
			<td>Harga Sekon</td>
		</tr>
		<?php foreach ($a as $kate):  ?>
		<tr>
			<td align="center"><?= $kate["no"]?></td>
			<td><?= $kate["nama perangkat"]?></td>
			<td><?= $kate["fungsi"]?></td>
			<td><?= $kate["harga baru"]?></td>
			<td><?= $kate["harga sekon"]?></td>
		</tr>
		<?php endforeach; ?>
		<tr colspan = "2" >
			<td align="center"><?= $kata[0]?></td>
			<td colspan="2" align="center">Jumlah</td>
			<td><?= $kata[1] ?></td>
			<td><?= $kata[2] ?></td>
		</tr>
	</table>
	<h3><a href="../../index.php">back</a></h5>
</body>
</html>