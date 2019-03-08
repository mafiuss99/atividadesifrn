<html>
<head>
	<title>Resultado!!!</title>
	<style type="text/css">
		img{
			width: 240px;
			height: 240px;
		}

	</style>
</head>
<body>
	<?php
		$peso = $_POST["peso"];
		$altura = $_POST["altura"];
		$imc = $peso /($altura*$altura);
		
		if($imc>25){
			echo "<img src='https://png.icons8.com/ios/1600/fat-man-filled.png'>";
			/*preciso adicionar uma imagem aqui!*/
			echo "<h3>Seu IMC é $imc, Você está acima do peso!</h3>";
		}else{
			echo "<img src = 'http://cacafth.com/wp-content/uploads/people-1-1.png'>";
			/*preciso adicionar uma imagem aqui*/
			echo "<h3>Parabéns! Seu IMC é $imc, Você está saudável!</h3>";
		};
	?>
</body>
</html>