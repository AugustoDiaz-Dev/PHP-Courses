<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Return</title>
</head>
<body>

<?php
function cuadrado($num) {
return $num * $num; // Devuelve el cuadrado de $num
}
echo cuadrado (5); //Escribe: 25
?>

<p>No es posible devolver múltiples valores desde una función, pero un efecto similar se puede conseguir devolviendo una lista, para ello se emplea la función de PHP list()</p>

<?php
function numeros() {
return array (0,1,2,3);
}
list ($cero, $uno, dos, $tres) = numeros();
echo ($cero.‟,‟);
echo ($uno.‟,‟);
echo ($dos.‟,‟);
echo ($tres);
?>
    
</body>
</html>