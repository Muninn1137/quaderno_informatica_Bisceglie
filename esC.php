<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangolo di asterischi</title>
    <link rel="stylesheet" href="style.css">
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
    <h3>Triangoli di asterischi</h3>
    <p>In questo esercizio ho utilizzato dei cicli for annidati con stampe di tipo echo per stampare nella maniera richiesta i triangoli di asterischi.</p>
<footer>
        Questo progetto si chiama Quaderno di informatica e permette di visualizzare i vari esercizi svolti con php e html
    </footer>
</html>
