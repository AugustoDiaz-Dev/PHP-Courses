<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo 2 PHP</title>
</head>
<body>

<?php

echo "Hola Mundo"; //Cl�sica utilizaci�n del echo

echo "</br>";  //Podemos utilizar echo, para intercalar c�digo HTML entre el PHP, en este caso un salto de l�nea.
echo "</br>";

echo "Este texto se extiende
por varias lineas. Los saltos de linea
aqu� utilizados no son
tomados en cuenta </br></br>";  //En este caso los saltos de l�nea est�ndentro de la frase que se muestra en pantalla.


/* En PHP una cadena es cualquier conjunto de caracteres entrecomillados.
PHP considera como cadena todo lo que encuentre entre un par de comillas, por eso todas las cadenas deben comenzar y terminar con el mismo tipo de comillas, simples o dobles: */

echo 'esto es una cadena con comillas simples';
echo "</br>";echo "</br>";
echo "esa es una cadena con comillas dobles";
echo "</br>";echo "</br>";

// echo "este es un ejemplo INVALIDO de cadena';

echo "esta 'frase' seria una sola cadena";
echo "</br>";echo "</br>";
echo 'y esta "otra" tambi�n';  
echo "</br>";echo "</br>";

/* El primer tipo de comillas que abre la cadena ser� el tenido en cuenta por PHP para localizar su fin. Por eso es v�lido que dentro de la cadena se incluyan comillas distintas, en cualquier n�mero. Si nos vemos obligados a incluir comillas del mismo tipo que delimita la cadena, deberemos usar caracteres de escape: */

echo "escapando \"comillas\" en una cadena";
echo "</br>";echo "</br>";


echo <<<FIN
Este texto utiliza una sintaxis especial que
permite mostrar varias lineas de texto.
La etiqueta que indica el final del bloque de texto
(y que en este caso es "FIN") debe aparecer en una
linea que contenga solamente el valor de la etiqueta
y un caracter de punto y coma (ni siquiera puede
contener espacios en blanco).
FIN;

?> 
</body>
</html>