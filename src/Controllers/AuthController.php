<?php

namespace App\Controllers;

class AuthController
{
    public function registerForm()
    {
        setcookie("mycookie", 'example');
        dump($_COOKIE);
        session_start(['cookie_httpsonly' => true]);
        // $_SESSION['secret'] = 'aws';
        dump($_SESSION);
    }
}
