<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operadores lógicos</title>
</head>
<body>

<?php
$a = ($b = 4) + 5; // $a es igual a 9 ahora, y $b ha sido definido a 4.
?>

<?php
$a = 3;
$a += 5; // define $a como 8, como si hubiésemos dicho: $a = $a + 5;
$b = "Hola ";
$b .= "a todos!"; // define $b como "Hola a todos!", tal como $b = $b . "a todos!";
?>

<?php
$cadena_uno = "Lorem ipsum";
$cadena_dos = " dolor sit amet";
$cadena_uno .= $cadena_dos;
echo $cadena_uno;
?>
    
</body>
</html>