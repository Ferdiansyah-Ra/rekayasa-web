<!DOCTYPE html>
<html>
<head>
	<title>Latihan4b</title>
</head>
<body>
	<?php 
		$komputer = ["Motherboard","Processor","Hardisk", "PC Coller","VGA Card", "SSD"];
		echo "<h3>Macam - macam perangkat keras komputer </h3>";
		echo "<ul>";
		for ($i=0; $i < count($komputer) ; $i++) 
		{ 
			echo "<li>$komputer[$i]</li>";
		}
		echo "</ul>";

		$komputer[] = "Card reader";
		$komputer[] = "Modem";
		$a = sort($komputer);

		echo "<h3>Macam - macam perangkat keras komputer baru</h3>";

		for ($i=0; $i < count($komputer) ; $i++) 
		{ 
			echo "<li>$komputer[$i]</li>";
		}
	?>

	<h4><a href="../../index.php">back</a></h4>
</body>
</html>