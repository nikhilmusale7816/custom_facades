<?php

namespace App\Http\Controllers;

use App\Facades\UserFacade as User;

class UserController extends Controller
{
    public function index()
    {
        // Using the facade to get all users
        $users = User::getAllUsers();

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        // Using the facade to get user by ID
        $user = User::getUserById($id);

        return view('users.show', compact('user'));
    }
}
