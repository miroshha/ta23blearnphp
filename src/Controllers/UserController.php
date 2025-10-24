<?php

namespace App\Controllers;

use App\Models\user;

class userController
{
    public function index()
    {
        $users = user::all();
        view('users/index', compact('users'));
    }

    public function create()
    {
        view('users/create');
    }

    public function store()
    {
        $user = new User();
        $user->email = $_POST['email'];
        $user->save();
        redirect('/users');
    }

    public function view()
    {
        $user = user::find($_GET['id']);

        view('users/view', compact('user'));
    }

    public function edit()
    {
        $user = user::find($_GET['id']);
        view('users/edit', compact('user'));
    }

    public function update()
    {
        $user = user::find($_GET['id']);
        $user->email = $_POST['email'];
        $user->save();
        redirect('/users');
    }

    public function destroy() {
        $user = user::find($_GET['id']);
        $user->delete();
        redirect('/users');
    }
}
