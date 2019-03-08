<html>
<head>
	<title>Resultado</title>
	<style type="text/css">
		img{
			width: 100%;
		}
	</style>
</head>
<body>
	<h1>Resultado</h1>
	<?php
		$vezes = $_POST["vezes"];
		$link = $_POST["link"];
		for ($i = 1; $i <= $vezes; $i++){
			$arr[$i] = "<img src = $link>";
		}
		echo join('<br>', $arr);	
	?>

</body>
</html>