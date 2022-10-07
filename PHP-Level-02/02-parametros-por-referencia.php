<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Parámetros por refererencia</title>
</head>
<body>
    
<?php
function agregar(&$string){
    /* Paso por referencia del parámetro. Los cambios también se veran reflejados fuera de la función */
    $string = 'y algo más.';
}
$str = 'Esto es una cadena, , ';
agregar($str);
echo $str;
// Escribe 'Esto es una cadena, y algo más.'
/>


</body>
</html>