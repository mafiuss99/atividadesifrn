<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<style type="text/css">
		img{
			width: 40px;
		}
	</style>
</head>
<body>
	<?php
		$valor = $_POST["estrelas"];
		$i = 1;
		while($i<=$valor){
			echo "<img src = 'http://www.pngpix.com/wp-content/uploads/2016/10/PNGPIX-COM-Star-PNG-Transparent-Image-2-500x500.png'>";
			$i++;
		}

	?>
</body>
</html>