<?php 
    $frase = '"Sono un simpatico paragrafo."';
    $parolaCensurata = $_GET['parola'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>

<h3>
    Stampare a schermo il paragrafo e la sua lunghezza.
</h3>
<p>
    <?php 
        echo "La mia frase è: " . $frase;
    ?>
</p>
<p>    
    <?php 
        echo "La mia frase è lunga: " . strlen($frase) . " caratteri.";
    ?>
</p>

</body>
</html>