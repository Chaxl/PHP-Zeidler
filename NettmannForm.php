<?php
    session_start();
    $_SESSION['txtKDNR'] = $_POST['txtKDNR'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>MietwagenAuftragseingabe</title>
</head>
<body>



<h1>Mietwagen</h1>
<form method='post' action='auswertung.php'>

<?php

    echo "Kundennummer: $_SESSION[txtKDNR]<br><br>";
?>
    <!-- <input type='text' id='txtKDNR' name='txtKDNR'><br><br>-->

    <label>Welche Fahrzeugklasse bevorzugen Sie:</label></p>
    <input type='radio' id='Kleinwagen' name='radFKlasse' value='Kleinwagen' checked>
    <label for='Kleinwagen'>Kleinwagen</label><br>
    <input type='radio' id='Kompaktklasse' name='radFKlasse' value='Kompaktklasse'>
    <label for='Kompaktklasse'>Kompaktklasse</label><br>
    <input type='radio' id='Familienwagen' name='radFKlasse' value='Familienwagen'>
    <label for='Familienwagen'>Familienwagen</label><br>
    <input type='radio' id='Luxusklasse' name='radFKlasse' value='Luxusklasse'>
    <label for='Luxusklasse'>Luxusklasse</label><br><br>

    <label>Welche Zusatzausstattung wünschen Sie:</label></p>
    <input type='checkbox' id='Klimaanlage' name='chkAussKlima' value='Klimaanlage'>
    <label for='Klimaanlage'>Klimaanlage</label><br>
    <input type='checkbox' id='Navigator' name='chkAussNavi' value='Navigator'>
    <label for='Navigator'>Navigator</label><br>
    <input type='checkbox' id='Standheizung' name='chkAussStandh' value='Standheizung'>
    <label for='Standheizung'>Standheizung</label><br><br>

    <label for='optAbholOrt'>Wo wollen Sie das Auto abholen:</label><br>
    
    <select id='optAbholOrt' name='optAbholOrt'>
        <option value='AN'>Autohaus Nettmann</option>
        <option value='TS'>Tankstelle</option>
        <option value='SB'>S-Bahnstation</option>
        <option value='HBF'>Hauptbahnhof</option>
    </select><br><br>

    <input type='reset' value='Löschen'>
    <input type='submit' value='Absenden'>

</body>
</html>