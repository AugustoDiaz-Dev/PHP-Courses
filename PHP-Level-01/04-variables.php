<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP variables</title>
</head>
<body>
    
<?php
/* Caso 1 */
$Cadena = "Hola Mundo"; //Asignación de una variable tipo string
/* Caso 2 */
echo $Cadena."<br/>"; //Muestra por pantalla el valor de $Cadena
/* Caso 3 */
$NumeroUno = 1; //Asignación de una variable de tipo int.
/* Caso 4 */
$NumeroDos = "2"; //Asignación de una variable tipo string.
/* Caso 5 */
echo $NumeroUno + $NumeroDos; //Muestra por pantalla '3'.
/* Caso 6 */
echo $NumeroDos + $Cadena; //Muestra por pantalla '2', no realiza la suma.
?>

</body>
</html>