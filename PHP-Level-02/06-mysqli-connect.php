<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP mysqli_connect()</title>
</head>
<body>

<p> mysqli_connect()
Establece la conexión con el servidor y selecciona la base de datos con la que vamos a
trabajar.</p>

<?php
//conection:
$link = mysqli_connect("myhost", "myuser", "mypassw", "mybd") or
die("Error " . mysqli_error($link));
?>
    
</body>
</html>