<?php 
    $frase = 'Sono un simpatico paragrafo. Ma davvero molto simpatico.';
    $parolaCensurata = $_GET['parola'];
    $paragrafoCensurato = str_replace($parolaCensurata, "***", $frase);
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

<h3>
    Parola da censurare:
</h3>
<form action="./index.php" method="get">
    <label for="parola">Inserisci una parola da censurare:</label>
    <input type="text" name="parola" id="parola">

    <button type="submit">Invia</button>
</form>

<p>
    <?php 
    echo "La parola censurata è: " . $parolaCensurata;
    ?>
</p>
<p>
    <?php 
        echo "Il paragrafo censurato è: " . $paragrafoCensurato . " Il paragrafo ora è lungo: " . strlen($paragrafoCensurato) . " caratteri.";
    ?>
</p>

</body>
</html>