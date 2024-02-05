<?php
    $nome = $_GET['nome'];
    $paragrafo = $_GET['paragrafo']


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        nome:
        <?php
            echo $nome
        ?>
        <br>
        parargrafo:
        <?php
            echo $paragrafo; 
            echo '<br><br>';
            echo '"lunghezza paragrafo: ' .strlen($paragrafo).'"';
            echo '<br><br>';
            echo '"'.str_replace($nome, '***', $paragrafo).'"';
        ?>

        
    </div>
   
    
</body>
</html>