<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genera Tabella</title>
    <link rel="stylesheet" href="/quaderno_informatica_Bisceglie/All/style.css">
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<nav>
    <a href="/quaderno_informatica_Bisceglie/All/index.html">Home</a>
</nav>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
        // Recupero del numero inserito dall'utente
        $n = intval($_POST["numero"]);

        // Validazione del numero
        if ($n >= 1 && $n <= 10) {
            echo "<h3 style='text-align: center;'>Tabella per i numeri da 1 a $n</h3>";
            echo "<table>";
            echo "<tr><th>Numero</th><th>Quadrato</th><th>Cubo</th></tr>";

            // Generazione della tabella
            for ($i = 1; $i <= $n; $i++) {
                $quadrato = $i * $i;
                $cubo = $i * $i * $i;
                echo "<tr><td>$i</td><td>$quadrato</td><td>$cubo</td></tr>";
            }

            echo "</table>";
        } else {
            echo "<p style='text-align: center; color: red;'>Errore: il numero deve essere compreso tra 1 e 10.</p>";
        }
    } else {
        // Visualizzazione del form
        ?>
        <form action="" method="post">
            <label for="numero">Seleziona un numero:</label>
            <select name="numero" id="numero" required>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option value=\"$i\">$i</option>";
                }
                ?>
            </select>
            <button type="submit">Crea tabella</button>
        </form>
        <?php
    }
    ?>

    <h3>Tabella quadrati e cubi</h3>
    <p>Questa pagina permette di scegliere su una checkbox a tendina un numero da 1 a 10, successivamente alla scelta si andrà a creare una tabella con la corretta formattazione e dati per quadrati e cubi per i numeri scelti.</p>
</body>
<footer>
        Questo progetto si chiama Quaderno di informatica e permette di visualizzare i vari esercizi svolti con php e html
    </footer>
</html>
