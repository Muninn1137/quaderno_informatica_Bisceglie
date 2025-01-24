
<body>
    <h1>Utenti</h1>

    <?php
        // Configurazione per la connessione al database
        $host = "localhost";        // Host del database (di solito 'localhost')
        $username = "Muninn";         // Nome utente del database
        $password = "Morinokarasu1137^^";             // Password del database
        $dbname = "dbTorsello";  // Nome del database
    
        // Creazione della connessione
        $conn = new mysqli($host, $username, $password, $dbname);
    
        // Controllo della connessione
        if ($conn->connect_error) {
            // Mostra un messaggio di errore in caso di connessione fallita
            echo "<p style='color: red;'>Connessione fallita: " . $conn->connect_error . "</p>";
        } else {
            // Mostra un messaggio di successo in caso di connessione riuscita
            echo "<p style='color: green;'>Connessione al database avvenuta con successo!</p>";
        }
    
        // Chiusura della connessione
        //$conn->close();
        ?>

    <form action="index.php" method="post">
        <input type="submit" name="utenti" value="Visualizza utenti">
    </form> 

   

<?php
    if (isset($_POST['utenti'])) {
        $result = $conn->query("SELECT * FROM Utenti");
        echo "<h2>Utenti</h2><table border='1'><tr><th>id_utente</th><th>Nickname</th><th>Email</th><th>Password</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['id_utente'] . "</td><td>" . $row['nickname'] . "</td><td>" . $row['email'] . "</td><td>" . $row['password'] . "</td></tr>";
        }
        echo "</table>";
    }
    
    //$conn->close();
    ?>

<p>Clicca sul link qui sotto per andare alla pagina di inserimento dati:</p>
<a href="insert_data.php">Pagina di inserimento dati</a>

</body>
</html>