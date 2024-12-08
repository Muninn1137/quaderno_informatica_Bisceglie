<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipolazione orario</title>
    <link rel="stylesheet" href="style.css">
    <nav>
        <a href="index.html">Home</a>
        <br>
        <br>
    </nav>
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

    <h3>Manipolazione orario</h3>
    <p>In questo esercizio ho manipolato una stringa per cambiare di valore in base al risultato dell'oggetto DateTime con formato 'H'</p>
</body>
<footer>
        Questo progetto si chiama Quaderno di informatica e permette di visualizzare i vari esercizi svolti con php e html
</footer>
</html>
