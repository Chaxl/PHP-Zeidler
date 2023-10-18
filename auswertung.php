<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Auswertung</title>
</head>
<body>

<h1>Mietwagen - Kundenbeleg</h1>

<form method='get'>

<?php

    if(!empty($_POST['txtKDNR']))
    {
        echo "Fehler: Es wurde keine Kundennummer eingetragen.";
        header('Location: NettmannForm.php');
    }
    echo "Kundennnummer: ";
    echo $_POST['txtKDNR'];
    echo "<br>Fahrzeugklasse: ";
    echo $_POST['radFKlasse'];
    echo "<br>Zusatzausstattung: ";
    if(isset($_POST['chkAussKlima']) == false && isset($_POST['chkAussNavi']) == false && isset($_POST['chkAussStandh']) == false){
        echo (isset($_POST['chkAussKlima']))?$_POST['chkAussKlima']."<br>":"";
        echo (isset($_POST['chkAussNavi']))?$_POST['chkAussNavi']."<br>":"";
        echo (isset($_POST['chkAussStandh']))?$_POST['chkAussStandh']."<br>":"";
    }
    else{
        echo "Keine Zusatzausstattung gewählt";    

    }
?>

</body>
</html>