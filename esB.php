<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipolazione orario</title>
</head>
<body>
    <?php
    // Creazione dell'oggetto DateTime
    $time = new DateTime("now", new DateTimeZone('Europe/Rome'));
    $currentHour = (int) $time->format('H'); // Ottieni l'ora corrente come intero

    // Inizializzazione della variabile
    $choosenTime = "";

    // Controllo delle fasce orarie
    if ($currentHour >= 8 && $currentHour < 12) {
        $choosenTime = "Buongiorno";
    } elseif ($currentHour >= 12 && $currentHour < 20) {
        $choosenTime = "Buonasera";
    } else {
        $choosenTime = "Buonanotte";
    }

    // Output del messaggio
    echo "<p>$choosenTime Paolo, benvenuto nella mia prima pagina PHP</p>";
    ?>
</body>
</html>
