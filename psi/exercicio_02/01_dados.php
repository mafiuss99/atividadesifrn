<html>
<head>
	<title>Resultado</title>
	<meta charset = "UTF-8">
</head>
<body>
	<h1>Você digitou:</h1>
	<?php
		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$idade = $_POST["idade"];
		$array = array($nome, $sobrenome, $idade);
		echo join('<br>', $array);
	?>

</body>
</html>