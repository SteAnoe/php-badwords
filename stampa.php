<?php

$testo = $_GET['testo'];
$parola = $_GET['parola'];

$testoLength = strlen($testo);

$testoCensurato = str_replace($parola, '***', $testo);
$testoCensuratoLength = strlen($testoCensurato);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Il testo inserito è <?php echo $testo . ' ' . 'e la sua lunghezza:' . $testoLength?> caratteri</h1>
    <h2>Il testo censurato è <?php echo $testoCensurato . ' ' . 'e la sua lunghezza:' . $testoCensuratoLength?> caratteri</h2>
</body>
</html>