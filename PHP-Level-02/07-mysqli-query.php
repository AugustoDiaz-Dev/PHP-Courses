<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP mysqli_query()</title>
</head>
<body>

<p>mysqli_query()
Ejecuta el query pasado como parámetro.</p>

<?php
//conection:
$link = mysqli_connect("myhost", "myuser", "mypassw", "mybd") or
die("Error " . mysqli_error($link));
//consulta:
$result = mysqli_query($link, "SELECT * FROM table") or die("Error " .
mysqli_error($link));
?>
    
</body>
</html>