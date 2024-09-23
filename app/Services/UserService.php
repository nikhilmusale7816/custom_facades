<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function getUserById($id)
    {
        return User::find($id);
    }

    public function getUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }
}
