


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
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        min-height: 100vh;
        margin: 0;
        display: grid;
        place-items: center;
        padding: 24px;
        background: linear-gradient(135deg, #eef2ff, #f8fafc);
        font-family: Arial, sans-serif;
    }

    h1 {
        max-width: 90%;
        margin: 0;
        padding: 32px 40px;
        border: 1px solid #e2e8f0;
        border-radius: 20px;
        background: #fff;
        box-shadow: 0 18px 45px rgba(30, 41, 59, 0.12);
        color: #1e293b;
        font-size: clamp(1.5rem, 5vw, 2.25rem);
        line-height: 1.4;
        text-align: center;
        overflow-wrap: anywhere;
    }
</style>

    <h1>Risultato <?php echo $risultato; ?></h1>
</body>
</html>