<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $posts = [
            ['title' => "World news 1", "published" => '26.09.2025', 'author' => "Miron", 'body' => "Some kind of news1"],
            ['title' => "World news 1", "published" => '27.09.2025', 'author' => "Kaspar", 'body' => "Some kind of news2"],
            ['title' => "World news 3", "published" => '28.09.2025', 'author' => "Miron", 'body' => "Some kind of news3"],
            ['title' => "World news 4", "published" => '29.09.2025', 'author' => "Kaspar", 'body' => "Some kind of news4"],
            ['title' => "World news 5", "published" => '30.09.2025', 'author' => "Miron", 'body' => "Some kind of news5"],
        ];
        view('index', compact('posts'));
    }

    public function us()
    {
        $posts = [
            ['title' => "U.S news 1", "published" => '26.09.2025', 'author' => "Miron", 'body' => "Some kind of news1"],
            ['title' => "U.S news 2", "published" => '27.09.2025', 'author' => "Kaspar", 'body' => "Some kind of news2"],
            ['title' => "U.S news 3", "published" => '28.09.2025', 'author' => "Miron", 'body' => "Some kind of news3"],
            ['title' => "U.S news 4", "published" => '29.09.2025', 'author' => "Kaspar", 'body' => "Some kind of news4"],
            ['title' => "U.S news 5", "published" => '30.09.2025', 'author' => "Miron", 'body' => "Some kind of news5"],
        ];
        view('us', compact('posts'));
    }

    public function tech()
    {
        $posts = [
            ['title' => "tech news 1", "published" => '26.09.2025', 'author' => "Miron", 'body' => "Some kind of news1"],
            ['title' => "tech news 2", "published" => '27.09.2025', 'author' => "Kaspar", 'body' => "Some kind of news2"],
            ['title' => "tech news 3", "published" => '28.09.2025', 'author' => "Miron", 'body' => "Some kind of news3"],
            ['title' => "tech news 4", "published" => '29.09.2025', 'author' => "Kaspar", 'body' => "Some kind of news4"],
            ['title' => "tech news 5", "published" => '30.09.2025', 'author' => "Miron", 'body' => "Some kind of news5"],
        ];
        view('tech', compact('posts'));
    }


    public function form()
    {
        $name = $_GET['name'] ?? '';
        $age = $_GET['age'] ?? '';
        view('form', compact('name', 'age'));
    }

    public function answer()
    {
        dump($_GET, $_POST, $_REQUEST);
    }
}
