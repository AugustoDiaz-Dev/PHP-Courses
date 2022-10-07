<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Parámetros por valor y por referencia</title>
</head>
<body>

<?php
function agregar($string) {
    // Paso por valor del parámetro.
$string .= ' y algo más.';
}
$str = 'Esto es una cadena, ';
agregar($str);
echo $str."<br/>"; // Escribe 'Esto es una cadena, '
function agregarporreferencia(&$str) {
// Paso por referencia del parámetro.
$str .= ' y algo más.';
}
agregarporreferencia($str);
echo($str);
// Escribe 'Esto es una cadena, y algo más.'
?>

</body>
</html>