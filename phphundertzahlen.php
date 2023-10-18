<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP Hundert Zahlen</title>
</head>
<body>
<
    <?php
    $i=1;
    for ($j=1; $j <=10; $j++){
        echo "<table>";
        echo "<tr>";
        for ($h=1; $h <= 10; $h++){
            echo "<td>$i</td>";
            $i++;
        }
        echo "</table>";
    }
//for ($i=1; $i <=100; $i++)
//{
//    echo "<div class='box'>";
//    echo "<p align=center>$i</p>";
//    echo "</div>";
//}
    ?>
</body>
</html>
