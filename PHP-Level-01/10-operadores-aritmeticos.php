<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operadores aritméticos</title>
</head>
<body>

<?php
$calculo1=12/4; // 12/4=3
$calculo2=3*2; // 3*2=6
$calculo3=20%3; // 20/3=6, resto=2
echo $calculo1+$calculo2-$calculo3;
?>
<?php
$numero=24;
echo $numero."<br/>";
echo $numero++; // Lo muestra primero y luego lo incrementa, por ello es 24
echo "<br/>";
echo $numero; // Volvemos a mostrarlo y ya vale 25
echo "<br/>";
echo $numero--; // Lo muestra primero y luego lo decrementa, por ello es 25
echo "<br/>";
echo $numero; // Volvemos a mostrarlo y ya vale 24
echo "<br/>";
echo ++$numero; // Lo incrementa primero y luego lo muestra, por ello es 25
echo "<br/>";
echo --$numero; // Lo decrementa primero y luego lo muestra, por ello es 24
echo "<br/>";
?>

<?php
$uno = 1;
$dos = 10%8; // 10/8=1, en lo que el resto es 2
$tres = 3;
$cuatro = 4;
$uno++; // la variable $uno ahora vale 2, ya que 1+1=2
$dos--; // la variable $dos ahora vale 1, ya que 2-1=1
$calculo = 1 + 5 * 3; // Da como resultado 16
echo $calculo;
$calculo2 = 1 + (5 * 3); // Da como resultado 18
echo $calculo2;
?>
    
</body>
</html>