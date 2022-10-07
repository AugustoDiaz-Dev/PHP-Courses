<?php
# Expressions
// pretty much anything after the asignment operator is an expression in php becuase it evaualtes to some kind of value that can be of any data type
$x = 4; 
$y = $x;

$z = $x === $y;

echo $z .'</br>';

if ($x < 5) {
    echo 'Hello';
}



