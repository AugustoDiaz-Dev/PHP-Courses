<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operadores de comparación</title>
</head>
<body>

<?php
$a = 8;
$b = 3;
$c = 3;
echo $a == $b,"<br>"; //imprime 1 porque es verdadero
echo $a != $b,"<br>"; //imprime 1 porque es verdadero
echo $a < $b,"<br>"; //imprime vacío “ “ porque es falso
echo $a > $b,"<br>"; //imprime 1 porque es verdadero
echo $a >= $c,"<br>"; //imprime 1 porque es verdadero
echo $b <= $c,"<br>"; //imprime 1 porque es verdadero
?>

<?php
   $a = 8;
   $b = 3;
   $c = 3;
   echo ($a == $b) && ($c > $b),"<br>"; //Falso, muestra un espacio en blanco. Ambos deben ser verdaderos para ser True.
   echo ($a == $b) || ($b == $c),"<br>";//Verdadero, porque al menos uno lo es muestra un 1.
   echo !($b <= $c),"<br>";
?>s
    
</body>
</html>