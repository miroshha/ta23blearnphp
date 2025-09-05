<?php

echo "Hello world!\n";
echo('Hello world');
echo "\n";
$name = 'Kaspar';
echo 'Hello $name';
echo "\nHello $name\n";

$var = '💩';
var_dump($var);
var_dump(strlen($var));
$var = 1;
var_dump($var);
$var = 1.5;
var_dump($var);

var_dump(PHP_INT_MAX);
var_dump(PHP_FLOAT_MAX);

$var = true;
var_dump($var);

$var = false;
var_dump($var);

$bar = null;

var_dump($bar);
?>