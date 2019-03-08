<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $resposta = $_GET["resposta"];
            if ($resposta == 15){
                echo "<h2>Parabéns! Você acertou!</h2>";
            }else{
                echo "<h2>Infelizmente você errou!";
                echo "Você respondeu: ".$resposta."</h2>";
            }
        ?>
    </body>
</html>
