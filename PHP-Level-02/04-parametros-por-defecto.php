<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function cafe($tipo="cappucino") {
/*El valor por defecto del parámetro $tipo es cappucino*/
return "Haciendo una taza de $tipo.<br>";
}
echo cafe();
/*Llamada a la función sin parámetro. El parámetro tomará su valor por defecto: cappucino*/
echo cafe("espresso");
//El parámetro tomará el valor espresso
?>
    
</body>
</html>