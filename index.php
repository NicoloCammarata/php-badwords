<?php
    $nome = ''


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>
        <?php
            echo $nome 


        ?>
    </h1>
    <div>
        <a href="./about.php">
            about
        </a>
    </div>
    <form action="./about.php" method="GET">
    
        <input type="text" name="nome">
        <input type="text" name="paragrafo">
        <button type="submit">invia</button>

    </form>
</body>
</html>