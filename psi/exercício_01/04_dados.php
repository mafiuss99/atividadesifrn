
<html>
<head>
	<title>Modalidades</title>
</head>
<body>
	
	<h3>Modalidades selecionadas:</h3>
	
	<?php
		if(!empty($_POST['esporte'])){
			foreach ($_POST['esporte'] as $check){
				echo "$check<br/>";
			}
		}
	?>

</body>
</html>