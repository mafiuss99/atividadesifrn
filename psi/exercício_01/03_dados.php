<html>
<head>
	<title>Página inicial</title>
</head>
<body>
	<?php
		if($_POST["user"]=="maria" and $_POST["senha"]=="12345"){
			echo "<h3>Autenticação realizada com sucesso!</h3>";
		}else{
			echo "<h3>ERRO! Você não tem permissão de visualizar esta página!</h3>";
		}
	?>

</body>
</html>