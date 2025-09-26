<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump(...$args) {
    echo '<pre>';
    var_dump(...$args);
    echo '</pre>';
}

spl_autoload_register(function($class) {
    require_once __DIR__. "/../src/$class.php";
});

// require_once __DIR__. '/../src/Router.php';
// require_once __DIR__. '/../src/DB.php';

$router = new App\Router();
dump($router);
$db = new App\DB();
dump($db);
$controller = new App\Controllers\PublicController();
dump($controller);
// switch ($_SERVER['REQUEST_URI']) {
//     case '/': 
//         $posts = [
//             ['title' => "World news 1", "published" => '26.09.2025', 'author' => "Miron", 'body' => "Some kind of news1"],
//             ['title' => "World news 1", "published" => '27.09.2025', 'author' => "Kaspar", 'body' => "Some kind of news2"],
//             ['title' => "World news 3", "published" => '28.09.2025', 'author' => "Miron", 'body' => "Some kind of news3"],
//             ['title' => "World news 4", "published" => '29.09.2025', 'author' => "Kaspar", 'body' => "Some kind of news4"],
//             ['title' => "World news 5", "published" => '30.09.2025', 'author' => "Miron", 'body' => "Some kind of news5"],
//         ];
//         include __DIR__ . '/../views/index.php';
//         break;
//     case '/us':
//         $posts = [
//             ['title' => "U.S news 1", "published" => '26.09.2025', 'author' => "Miron", 'body' => "Some kind of news1"],
//             ['title' => "U.S news 2", "published" => '27.09.2025', 'author' => "Kaspar", 'body' => "Some kind of news2"],
//             ['title' => "U.S news 3", "published" => '28.09.2025', 'author' => "Miron", 'body' => "Some kind of news3"],
//             ['title' => "U.S news 4", "published" => '29.09.2025', 'author' => "Kaspar", 'body' => "Some kind of news4"],
//             ['title' => "U.S news 5", "published" => '30.09.2025', 'author' => "Miron", 'body' => "Some kind of news5"],
//         ];
//         include __DIR__ . '/../views/us.php';
//         break;
//     default: 
//         http_response_code(404);
//         echo '404 page not found';
// }