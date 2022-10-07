<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo variables</title>
</head>
<body>

<?php

$numero_grande =  2147483647;
var_dump($numero_grande); // salida: int(2147483647)
echo "<br/>";
$numero_grande =  2147483648;
var_dump($numero_grande); // salida: float(2147483648)
echo "<br/>";
// esto no ocurre con los enteros indicados como hexadecimales:

var_dump( 0x100000000 ); // salida: int(2147483647)
echo "<br/>";
$millon = 1000000;
$numero_grande =  50000 * $millon;
var_dump($numero_grande); // salida: float(50000000000)
echo "<br/>";
?> 

</body>
</html>

