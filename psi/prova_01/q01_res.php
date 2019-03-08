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
            $preco = $_POST["preco"];
            $litros = $_POST["litros"];
            $total = $preco * $litros;
            
            echo "<h3> Total a pagar: ".$total."</h3>";
// put your code here
        ?>
    </body>
</html>
