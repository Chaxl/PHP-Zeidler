<?php
    session_start();

?>

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

    //if(empty(trim($_POST['txtKDNR'])))
    //{
    //    echo "Fehler: Es wurde keine Kundennummer eingetragen.";
    //    header('Location: NettmannForm.php');
    //}

    echo "Kundennnummer: $_SESSION[txtKDNR]";
    echo "<br>Fahrzeugklasse: $_POST[radFKlasse]";
    echo "<br>Zusatzausstattung: ";
    if(isset($_POST['chkAussKlima']) == true || isset($_POST['chkAussNavi']) == true || isset($_POST['chkAussStandh']) == true){
        echo (isset($_POST['chkAussKlima']))?$_POST['chkAussKlima']."<br>":"";
        echo (isset($_POST['chkAussNavi']))?$_POST['chkAussNavi']."<br>":"";
        echo (isset($_POST['chkAussStandh']))?$_POST['chkAussStandh']."<br>":"";
    }
    else{
        echo "Keine Zusatzausstattung gewählt";    

    }
    echo "<br>Abholort: $_POST[optAbholOrt]"
?>

</body>
</html>