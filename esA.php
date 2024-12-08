<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella pitagorica</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            padding: 8px;
            border: 1px solid #000;
        }
        th {
            background-color: #ddd;
        }
    </style>

    <nav>
        <a href="index.html">Home</a>
        <br>
        <br>
    </nav>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>&times;</th>
                <?php
                // Crea l'intestazione della prima riga con i numeri da 1 a 10
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Genera le righe della tabella
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                // Crea la prima cella di ogni riga (intestazione di riga)
                echo "<th>$i</th>";
                    
                // Genera le celle con i prodotti
                for ($j = 1; $j <= 10; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
 
    <h3>Tabella pitagorica</h3>
    <p>In questo esercizio ho creato una tabella pitagorica: ho creato una tabella con html usando i tag della famiglia "table". Per popolare la tabella ho usato dei cicli for annidati, quindi ho trattato il tutto come una matrice bidimensionale. </p>
</body>
<footer>
        Questo progetto si chiama Quaderno di informatica e permette di visualizzare i vari esercizi svolti con php e html
    </footer>
</html>