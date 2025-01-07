<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Anagrafica Utenti</title>
</head>
<body>

    <nav>
        <a href="index.html">Home</a>
        <br>
        <br>
    </nav>

    <form action="process_form.php" method="post">
        <h2>Gestione Anagrafica Utenti</h2>

        <label for="nome">Nome*</label>
        <input type="text" id="nome" name="nome" required pattern="[A-Za-z\s]+" title="Inserisci solo caratteri alfabetici e spazi">

        <label for="cognome">Cognome*</label>
        <input type="text" id="cognome" name="cognome" required pattern="[A-Za-z\s']+" title="Inserisci solo caratteri alfabetici, spazi e apostrofi">

        <label for="dataNascita">Data di Nascita*</label>
        <input type="date" id="dataNascita" name="dataNascita" required>

        <label for="codiceFiscale">Codice Fiscale</label>
        <input type="text" id="codiceFiscale" name="codiceFiscale">

        <label for="email">Email*</label>
        <input type="email" id="email" name="email" required>

        <label for="cellulare">Cellulare</label>
        <input type="tel" id="cellulare" name="cellulare" pattern="\d{12}" title="Inserisci un numero di 12 cifre, incluso il prefisso">

        
        <legend>Indirizzo*</legend>
        <label for="via">Via/Piazza</label>
        <input type="text" id="via" name="via" required>

        <label for="cap">CAP</label>
        <input type="text" id="cap" name="cap" required pattern="\d{5}" title="Inserisci un CAP valido di 5 cifre">

        <label for="comune">Comune</label>
        <input type="text" id="comune" name="comune" required>

        <label for="provincia">Provincia</label>
        <input type="text" id="provincia" name="provincia" required>
    

        <label for="nickname">Nickname*</label>
        <input type="text" id="nickname" name="nickname" required title="Il nickname deve essere diverso dal nome e cognome">

        <label for="password">Password*</label>
        <input type="password" id="password" name="password" required pattern="(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}" title="La password deve contenere almeno una maiuscola, un numero, un carattere speciale e minimo 8 caratteri">

        <button type="submit">Salva</button>
    </form>

    <h3>Form</h3>
    <p>In questo form sono stati applicati diversi filtri come i required patterns e il filter_var che permette di avere un forum con dei campi piu'specifici e dati piu' costanti. </p>
    <footer>
        Questo progetto si chiama Quaderno di informatica e permette di visualizzare i vari esercizi svolti con php e html
    </footer>
</body>
</html>
