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
            
            $l1 = $_POST["lampada1"];
            $l2 = $_POST["lampada2"];
            $l3 = $_POST["lampada3"];
            
            if ($l1 == "1"){
                echo "<img src='acesa.jpg'/>";
            }else{
                echo "<img src='apagada.jpg'/>";
            }
            
            if ($l2 == "1"){
                echo "<img src='acesa.jpg'/>";
            }else{
                echo "<img src='apagada.jpg'/>";
            }
            
            if ($l3 == "1"){
                echo "<img src='acesa.jpg'/>";
            }else{
                echo "<img src='apagada.jpg'/>";
            }
        ?>
    </body>
</html>
