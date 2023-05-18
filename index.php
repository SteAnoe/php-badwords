<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

<form action="stampa.php" method="GET">

    <div>
        <label for="">Paragrafo</label>
        <textarea type="text" placeholder="Inserisci il testo" name="testo"></textarea>
        
        <label for="">Parola da censurare</label>
        <input type="text" placeholder="Inserisci la parola da censurare" name="parola">

        <button type="submit">Invia form</button>
    </div>

</form>

</body>
</html>