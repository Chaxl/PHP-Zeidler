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
    <title>MietwagenAuftragseingabeLogin</title>
</head>
<body>

<form method='post' action='NettmannForm.php'>
<label for ='txtKDNR'>Kundennummer:</label>
<input type='text' id='txtKDNR' name='txtKDNR' required><br><br>
<label for ='txtPWD'>Passwort:</label>
<input type='password' id='txtPWD' name='txtPWD' required><br><br>

<input type='submit' value='Login'>

<?php

?>