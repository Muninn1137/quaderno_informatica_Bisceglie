
<body>
    <h1>Inserimento dati utenti</h1>

    <?php
// Connessione al database (modifica con i tuoi dati)
$servername = "localhost";
$username = "Muninn";
$password = "Morinokarasu1137^^";
$dbname = "dbTorsello"; // Sostituisci con il nome del tuo database

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variabili per gestire l'inserimento
$id_utente = $nickname = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati inviati tramite POST
    $id_utente = $_POST['id_utente'];
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $password = $_POST['_password'];

    // Query SQL per inserire i dati nella tabella
    $sql = "INSERT INTO Utenti (id_utente, nickname, email, password)
            VALUES ('$id_utente', '$nickname', '$email', '$password')";

    // Esegui la query
    if ($conn->query($sql) === TRUE) {
        echo "Nuovo utente inserito con successo!";
    } else {
        echo "Errore: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci utente</title>
</head>
<body>
    <h2>Inserisci un nuovo utente</h2>
    <!-- Modulo per inserire i dati -->
    <form method="POST" action="">
        <label for="id_utente">Id_utente:</label>
        <input type="number" id="id_utente" name="id_utente" required><br><br>

        <label for="nickname"> Nickname:</label>
        <input type="text" id="nickname" name="nickname" required><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br><br>

        <label for="_password">Password:</label>
        <input type="text" id="_password" name="_password" required><br><br>

        <input type="submit" value="Inserisci Utente">
    </form>


    <p>Clicca sul link qui sotto per andare alla home page.</p>
<a href="index.php">Home</a>

</body>
</html>