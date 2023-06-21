<!DOCTYPE html>
<html>
<head>
    <title>Bestelpagina</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        h1 {
            text-align: center;
        }
        
        table {
            margin: 20px auto;
            border-collapse: collapse;
        }
        
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        
        table th {
            background-color: #f0f0f0;
        }
        
        table td input {
            width: 50px;
        }
        
        .buttons {
            text-align: center;
            margin-top: 20px;
            background-color: #fff;
            color: #000;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }
        
        .buttons button {
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<?php
// Ontvang de bestelling
$gerecht1 = $_POST["gerecht1"];
$gerecht2 = $_POST["gerecht2"];
$gerecht3 = $_POST["gerecht3"];
$gerecht4 = $_POST["gerecht4"];
$gerecht5 = $_POST["gerecht5"];

// Bereken het totaalbedrag
$totaalbedrag = ($gerecht1 * 19.99) + ($gerecht2 * 18.95) + ($gerecht3 * 4.99) + ($gerecht4 * 6.99) + ($gerecht5 * 11.99);

// Controleer of het totaalbedrag boven de 100 euro is
if ($totaalbedrag > 100) {
    // Bereken de korting (10% van het totaalbedrag)
    $korting = $totaalbedrag * 0.1;

    // Pas de korting toe op het totaalbedrag
    $totaalbedrag -= $korting;

    echo("U krijgt 10% korting!");
}

// Toon de bestelling en het totaalbedrag
echo "<h1>Bestelling ontvangen</h1>";
echo "<p>Gerecht 1: " . $gerecht1 . "</p>";
echo "<p>Gerecht 2: " . $gerecht2 . "</p>";
echo "<p>Gerecht 3: " . $gerecht3 . "</p>";
echo "<p>Gerecht 4: " . $gerecht4 . "</p>";
echo "<p>Gerecht 5: " . $gerecht5 . "</p>";
echo "<p>Totaalbedrag: €" . number_format($totaalbedrag, 2) . "</p>";
?>
    <h1>Bestelpagina</h1>
    
    <form action="verwerk_bestelling.php" method="post">

        <table>
            <tr>
                <th>Gerecht</th>
                <th>Prijs</th>
                <th>Aantal</th>
            </tr>
            <tr>
                <td>Kong bao niu</td>
                <td>€19.99</td>
                <td><input type="number" min="0" name="gerecht1" value="0"></td>
            </tr>
            <tr>
                <td>Szechuan niu</td>
                <td>€18.95</td>
                <td><input type="number" min="0" name="gerecht2" value="0"></td>
            </tr>
            <tr>
                <td>Loempia speciaal</td>
                <td>€4.99</td>
                <td><input type="number" min="0" name="gerecht3" value="0"></td>
            </tr>
            <tr>
                <td>Pikante kroepoek</td>
                <td>€6.99</td>
                <td><input type="number" min="0" name="gerecht4" value="0"></td>
            </tr>
            <tr>
                <td>Babi pangang met spek</td>
                <td>€11.99</td>
                <td><input type="number" min="0" name="gerecht5" value="0"></td>
            </tr>
        </table>
        
        <div class="buttons">
            <button type="submit">Bestellen</button>
            <button type="reset">Annuleren</button>
        </div>
    </form>

    
</body>
</html>