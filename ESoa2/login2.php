<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/quaderno_informatica_Bisceglie/All/style.css">
    <nav>
        <a href="/quaderno_informatica_Bisceglie/All/index.html">Home</a>
    </nav>
</head>
<body>
<h3>Accesso a pagina riservata</h3>

<form action="login2.php" method="post">
    <label for="username"><b>Username</b></label>
    <input type="text" id="username" name="username" placeholder="Inserisci il nome utente" /><br />
    
    <label for="password"><b>Password</b></label>
    <input type="password" id="password" name="password" placeholder="Inserisci la password" /><br />
    
    <input name="submit" type="submit" value="Invia" />
</form>


<h3>Controllo credenziali</h3>
<?php
    // Array paralleli per username e password
    $usernames = ["Admin", "User1", "Guest"];
    $passwords = ["Password2", "12345", "guest123"];

    // Controlla se il metodo è POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["username"]; // Dati forniti dall'utente
        $pwd = $_POST["password"];
        
        // Variabile di controllo per l'accesso
        $accessGranted = false;

        // Ciclo per verificare username e password
        for ($i = 0; $i < count($usernames); $i++) {
            // Verifica che username e password corrispondano
            if ($user === $usernames[$i] && $pwd === $passwords[$i]) {
                $accessGranted = true; // Abilita l'accesso
                break; // Esci dal ciclo per efficienza
            }
        }

        // Output in base al risultato del controllo
        if ($accessGranted) {
            echo "<h4>Benvenuto nell'area riservata del sito, $user!</h4>";
        } else {
            echo "<p style='color: red;'>Attenzione! Nome utente o password sbagliati. Accesso negato.</p>";
        }
    }
?>




<h3>Login forum</h3>
<p>In questo esercizio ho utilizzato i tag per i forum e una post per controllare due stringhe 'username' e 'password' se fossero corrette con ciò che viene inserito dall'utente, il tutto sulla stessa pagina.</p>

</body>
<footer>
Questo progetto si chiama Quaderno di informatica e permette di visualizzare i vari esercizi svolti con php e html
</footer>
</html> 