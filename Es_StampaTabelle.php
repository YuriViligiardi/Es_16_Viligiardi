<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzione Stampa Tabelle</title>
</head>
<body>
    <?php
        $righe = rand(1,10);
        echo "<h3>Righe: $righe</h3>";
        $colonne = rand(1,10);
        echo "<h3>Colonne: $colonne</h3>";
        stampaTabella($righe, $colonne);

        function stampaTabella($r,$c){
            echo "<table style='border: 1px solid black; border-collapse: collapse'>";
            for ($i=0; $i < $r; $i++) { 
                echo "<tr style:'border: 1px solid black;'>";
                for ($x=0; $x < $c; $x++) { 
                    echo "<td style='border: 1px solid black; padding: 50px;'>($i,$x)</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>