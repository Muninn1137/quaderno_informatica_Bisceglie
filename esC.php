<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangolo di asterischi</title>

    <nav>
        <a href="index.html">Home</a>
        <br>
        <br>
    </nav>
</head>

<!-- Non ho usato lo style consigliato perche' dava problemi di lettura -->

<body>
    <?php
    // Numero di righe del triangolo
    $rows = 10;
   

    // Ciclo per generare le righe
    echo "a)";
    echo "<br>";
    for ($i = 1; $i <= $rows; $i++) {
        // Stampa gli asterischi per la riga corrente
        for ($j = 1; $j <= $i; $j++) {
        echo "*";
        }
        // Vai a capo dopo ogni riga
        echo "<br>";
    }
 
    echo "b)";
    echo "<br>";
    // Ciclo per stampare le righe in ordine decrescente
    for ($i = $rows; $i >= 1; $i--) {
        // Stampa gli asterischi per la riga corrente
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        // Vai a capo dopo ogni riga
        echo "<br>";
    }

    // Todo c and d. idk how
    ?>
</html>
