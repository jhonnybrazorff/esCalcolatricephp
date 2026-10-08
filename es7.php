


<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operazione = $_POST['operazioni'];

switch ($operazione) {
    case 'somma':
        $risultato = $numero1 + $numero2;
        break;
    case 'sottrazione':
        $risultato = $numero1 - $numero2;
        break;
    case 'moltiplicazione':
        $risultato = $numero1 * $numero2;
        break;
    case 'divisione':
        if ($numero2 != 0) {
            $risultato = $numero1 / $numero2;
        } else {
            $risultato = "Errore: Divisione per zero non consentita.";
        }
        break;
    default:
        $risultato = "Operazione non valida.";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Risultato <?php echo $risultato; ?></h1>
</body>
</html>