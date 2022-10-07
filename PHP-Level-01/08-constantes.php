<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constantes</title>
</head>
<body>

<?php
define("CONSTANTE", "Hola Mundo.");
echo CONSTANTE; // muestra " Hola Mundo."
echo Constante; // muestra "Constante" y un aviso del sistema.
?>
    
</body>
</html>