<?php

    $testo = "Oggi come oggi viene censurato tutto, tra un po' non si potrà dire neanche dire cacca";

    $lunghezzaTesto = strlen($testo);

    $censuraParola = $_GET['censuraParola'];

    $testoCensurato = str_replace( $censuraParola, '***', $testo);

    $lunghezzaTestoCensurato = strlen($testoCensurato);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parole Brutte</title>
</head>
<body>
    
    <h1>Testo: <?php echo $testo ?></h1>
    <p>Lunghezza Testo: <?php echo $lunghezzaTesto ?></p>
    <h2>Testo Censurato: <?php echo $testoCensurato ?></h2>
    <p>Lunghezza Testo Censurato: <?php echo $lunghezzaTestoCensurato ?></p>
    
</body>
</html>