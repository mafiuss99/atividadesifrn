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
            $capitais = array($_POST["capital1"], $_POST["capital2"], $_POST["capital3"], $_POST["capital4"], $_POST["capital5"]);
        
            sort($capitais);
            
            echo "<ul>";
                foreach($capitais as $c){
                    echo "<li>".$c."</li>";
                }
            echo "</ul>";
            
            //Uma das formas de fazer é usar a função in_array
            /*if (! in_array("Natal", $capitais)){
                echo "Você precisa visitar Natal! Natal é uma das 5 mais belas";
            }*/
            
            $achou = false;
            foreach($capitais as $c){
                if ($c == "Natal") {
                    $achou = true;
                }
            }
            if (!$achou){
                echo "Você precisa visitar Natal! Natal é uma das 5 mais belas";
            }
            
            
        ?>
    </body>
</html>
