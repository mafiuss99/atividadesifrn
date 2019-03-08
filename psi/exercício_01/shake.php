<!DOCTYPE html>
<html>
<head>
	<title>Shakespere</title>
</head>
<body>
	<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Shakespeare.jpg/270px-Shakespeare.jpg">
	<br/>
	
	<?php
		$idioma = $_GET["idioma"];
		
		if($idioma == 'pt'){
			echo "<h3>Ser ou não ser? Eis a questão!</h3>";
		}
		else{
			echo "<h3>To be or not to be, that's the question.</h3>";
		}
	?>
</body>
</html>