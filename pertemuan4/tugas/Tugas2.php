<?php 
$a  =[
[
	"no" => "1",
	"picture" => "1.jpg",
	"judul" => "Captain Marvel",
	"actor" => "Brie Larson",
	"sutradara" => "Anna Boden, Ryan Fleck",
	"tanggal rilis" => " 8 Maret 2019",
	"genre" => "Action, Adventure"
],
[
	"no" => "2",
	"picture" => "2.jpg",
	"judul" => "Spider-Man: Homecoming",
	"actor" => " Tom Holland",
	"sutradara" => "Jon Watts",
	"tanggal rilis" => "28 Juni 2017",
	"genre" => "Drama, Romance"
],
[
	"no" => "3",
	"picture" => "3.jpg",
	"judul" => "Thor Ragnarok",
	"actor" => " Chris Hemsworth",
	"sutradara" => "Taika Waititi",
	"tanggal rilis" => "25 Oktober 2017",
	"genre" => "Action, Adventure,Comedy"
],
[
	"no" => "4",
	"picture" => "4.jpg",
	"judul" => "Avenger Infinity War",
	"actor" => "Robert Downey Jr. ,Chris Hemsworth",
	"sutradara" => "	Anthony Russo, dan Joe Russo",
	"tanggal rilis" => "25 April 2018",
	"genre" => "Action, Adventure,Comedy"
],
[
	"no" => "5",
	"picture" => "5.jpg",
	"judul" => "Warcraft",
	"actor" => "Travis Fimmel",
	"sutradara" => "Duncan Jones",
	"tanggal rilis" => "24 Mei 2016",
	"genre" => "Action, Fantasy, Adventure"
],
[
	"no" => "6",
	"picture" => "6.jpg",
	"judul" => "Bumblebee",
	"actor" => "Hailee Steinfeld",
	"sutradara" => "Travis Knight",
	"tanggal rilis" => "19 Desember 2018",
	"genre" => "Action, Fantasy, Adventure"
],	
[
	"no" => "7",
	"picture" => "7.jpg",
	"judul" => "Ant Man",
	"actor" => "Paul Rudd",
	"sutradara" => "Peyton Reed",
	"tanggal rilis" => "16 Juli 2015",
	"genre" => "Action, Fantasy, Adventure"
],
[
	"no" => "8",
	"picture" => "8.jpg",
	"judul" => "Transformer The Last Knight",
	"actor" => "Mark Wahlberg",
	"sutradara" => "Michael Bay",
	"tanggal rilis" => "21 Juni 2017",
	"genre" => "Action, Fantasy, Adventure"
],
[
	"no" => "9",
	"picture" => "9.jpg",
	"judul" => "Deadpool",
	"actor" => "Ryan Reynolds",
	"sutradara" => "Tim Miller",
	"tanggal rilis" => "10 Februari 2016",
	"genre" => "Action, Fantasy, Adventure"
],
[
	"no" => "10",
	"picture" => "10.jpg",
	"judul" => "Black Panther",
	"actor" => "Chadwick Boseman",
	"sutradara" => " Ryan Coogler",
	"tanggal rilis" => "14 Februari 2018",
	"genre" => "Action, Fantasy, Adventure"
],


];
?>
<!DOCTYPE html>
<html>
<head>
	<title>laihan 4d</title>
</head>
<body>
	<center>
		<h1>Daftar Film Terbaik</h1>

	<table border="2" cellpadding="4" cellspacing="0">
		<tr align="center" height="50">
			<td>No</td>
			<td>Picture</td>
			<td>Judul</td>
			<td width="200">Actor</td>
			<td width="300">Sutradara</td>
			<td>Tanggal Rilis</td>
			<td>Genre</td>
		</tr>
		<?php foreach ($a as $f):  ?>
		<tr align="center">
			<td align="center"><?= $f["no"]?></td>
			<td><img src="../../img/<?= $f['picture']; ?>"></td>
			<td><?= $f["judul"]; ?></td>
			<td><?= $f["actor"]; ?></td>
			<td><?= $f["sutradara"]; ?></td>
			<td><?= $f["tanggal rilis"]; ?></td>
			<td><?= $f["genre"]; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
	</center>
		<h4><a href="../../index.php">back</a></h4>
</body>
</html>