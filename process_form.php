<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera e pulisce i dati inviati dal form
    $nome = trim(htmlspecialchars($_POST['nome'] ?? ''));
    $cognome = trim(htmlspecialchars($_POST['cognome'] ?? ''));
    $dataNascita = trim(htmlspecialchars($_POST['dataNascita'] ?? ''));
    $codiceFiscale = trim(htmlspecialchars($_POST['codiceFiscale'] ?? ''));
    $email = trim(htmlspecialchars($_POST['email'] ?? ''));
    $cellulare = trim(htmlspecialchars($_POST['cellulare'] ?? ''));
    $via = trim(htmlspecialchars($_POST['via'] ?? ''));
    $cap = trim(htmlspecialchars($_POST['cap'] ?? ''));
    $comune = trim(htmlspecialchars($_POST['comune'] ?? ''));
    $provincia = trim(htmlspecialchars($_POST['provincia'] ?? ''));
    $nickname = trim(htmlspecialchars($_POST['nickname'] ?? ''));

    // Validazioni
    $errori = [];

    // Controllo nickname diverso da nome e cognome
    if ($nickname === $nome || $nickname === $cognome) {
        $errori[] = "Il nickname deve essere diverso dal nome e dal cognome.";
    }

    // Validazione email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errori[] = "L'email inserita non è valida.";
    }

    // Se ci sono errori, mostrarli a schermo
    if (!empty($errori)) {
        echo "<h1>Errori di validazione</h1>";
        echo "<ul>";
        foreach ($errori as $errore) {
            echo "<li>$errore</li>";
        }
        echo "</ul>";
        
    } else {
        // Mostra i dati se tutto è valido
        echo "<h1>Dati Inseriti</h1>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Cognome:</strong> $cognome</p>";
        echo "<p><strong>Data di Nascita:</strong> $dataNascita</p>";
        echo "<p><strong>Codice Fiscale:</strong> " . ($codiceFiscale ?: 'Non inserito') . "</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Cellulare:</strong> " . ($cellulare ?: 'Non inserito') . "</p>";
        echo "<p><strong>Indirizzo:</strong> $via, $cap, $comune, $provincia</p>";
        echo "<p><strong>Nickname:</strong> $nickname</p>";
    }
} else {
    echo "<p>Nessun dato ricevuto. Si prega di compilare il form.</p>";
}
?>
