<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Comillas simples</title>
</head>
<body>

<?php
echo 'esta es una cadena simple';
echo 'También puede tener saltos de línea embebidos en las cadenas de esta forma, ya que es válido';
echo 'Arnold dijo una vez: "I\'ll be back"';
// Imprime: Arnold dijo una vez: "I'll be back"
echo 'Ha eliminado C:\\*.*?'; // Imprime: Ha eliminado C:\*.*?
echo 'Ha eliminado C:\*.*?';
// Imprime: Ha eliminado C:\*.*?
echo 'Esto no va a expandirse: \n una nueva línea';
// Imprime: Esto no va a expandirse: \n una nueva línea
echo 'Las variables no se $expanden $tampoco';
// Imprime: Las variables no se $expanden $tampoco
?>
    
</body>
</html>