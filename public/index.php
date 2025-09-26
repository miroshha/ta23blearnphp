<?php

function dump(...$args) {
    echo '<pre>';
    var_dump(...$args);
    echo '</pre>';
}

dump($_SERVER);

switch($_SERVER["REQUEST_URI"]) {
    case '/':
        include __DIR__. '/../views/index.php';
        break;
    case '/us':
        include __DIR__. '/../views/us.php';
        break;
}