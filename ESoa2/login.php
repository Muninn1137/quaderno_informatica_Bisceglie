<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesso pagina riservata</title>
    <link rel="stylesheet" href="/quaderno_informatica_Bisceglie/All/style.css">
    <nav>
        <a href="/quaderno_informatica_Bisceglie/All/index.html">Home</a>
    </nav>
</head>
<body>
    <h3>Accesso a pagina riservata</h3>

    <form action="checkLogin.php" method="post">
        <label for="username"><b>Username</b></label>
        <input type="text" name="username" placeholder="Inserisci il nome utente" required /><br />
        <label for="password"><b>Password</b></label>
        <input type="password" name="password" placeholder="Inserisci la password" required /><br />
        <input name="submit" type="submit" value="Invia" />
    </form>
    <h3>Login forum</h3>
    <p>In questo esercizio ho utilizzato i tag per i forum e una post per controllare due stringhe 'username' e 'password' se fossero corrette con ciò che viene inserito dall'utente, su due pagine differenti, infatti la post punta ad un altro file.</p>
    <footer>
        Questo progetto si chiama Quaderno di informatica e permette di visualizzare i vari esercizi svolti con php e html
    </footer>
</body>
</html>
