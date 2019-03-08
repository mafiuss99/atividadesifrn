<html>
<head>
	<title></title>
</head>
<body>
	<h1>RESULTADO</h1>
	<?php
		$base = $_POST["base"];
		$altura = $_POST["altura"];
		$area = $base*$altura;
		$perimetro = ($base*2)+($altura*2);
		echo "<h3>Area: ".$area."cm</h3>";
		echo "<h3>Perimetro: ".$perimetro."cm</h3>";
	?>

</body>
</html>