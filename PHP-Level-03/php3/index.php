<?php
// Variables, constants and variable variables.

// Variables

$firstName = 'Augusto ';
$firstName = 'Robert ';

echo $firstName;

// Constants (define() - const). Magic constants

// define('name', 'value');
// It is deprecated
define('STATUS_PAID', 'paid ');
echo STATUS_PAID;
echo defined('STATUS_PAID');

const STAT_PAID = 'paid ';

echo STAT_PAID;

echo PHP_VERSION;

echo __LINE__;
// Prints the number of the line you are using
echo __FILE__;
// Prints the file path where it's used

// Variable variables
$foo = 'bar';
$$foo = 'baz';
// $bar = 'baz'; Create that variable, asigning to the value of $foo 'baz';
echo $foo, ${$$foo};