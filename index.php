<?php

$array = array(1, 2, 3); // old way

var_dump($array);

$array = [1, 2, 3];

var_dump($array);

$array = [
    1,
    'hello',
    true,
    [1, 2, 3],
    3.4,
];
var_dump($array);

$array = [
    'name' => 'Kaspar',
    'age' => 32,
    'isMale' => true,
];
var_dump($array);

$array = [
    1,
    true,
    'name' => 'Kaspar',
    'age' => 32,
    'asdasd',
    'isMale' => true,
    100 => 4,
    5,
    6.3,
    NULL,
];
var_dump($array);

var_dump($array[1]);
var_dump($array['name']);
$array = [
    [ 1, 2, 3],
    [ 4, 5, 6],
    [ 7, 8, 9],
];
var_dump($array[2][1]);
