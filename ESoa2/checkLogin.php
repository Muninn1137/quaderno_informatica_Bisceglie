<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato Login</title>
    <link rel="stylesheet" href="/quaderno_informatica_Bisceglie/All/style.css">
    <nav>
        <a href="../index.html">Home</a>
    </nav>
</head>
<body>
    <h3>Risultato Login</h3>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["username"];
        $pwd = $_POST["password"];

        if ($user != "admin" || $pwd != "Password") {
            echo "<p style='color: red;'>Attenzione! Nome utente o password sbagliati. Accesso negato.</p>";
        } else {
            echo "<h4 style='color: green;'>Benvenuto nell'area riservata del sito</h4>";
        }
    } else {
        echo "<p>Errore: il form non è stato inviato correttamente.</p>";
    }
    ?>

    <h3>Login forum</h3>
    <p> Questa è la pagina che dà il risultato positivo o negativo per la richiesta di accesso effettuata nella pagina precedente</p>
    <footer>
        Questo progetto si chiama Quaderno di informatica e permette di visualizzare i vari esercizi svolti con php e html
    </footer>
</body>
</html>
