<?php

class User extends Eloquent
{
    public $timestamps = false;

    public function getUser($token)
    {
        return User::where('token', '=', $token);
    }

    public function Correct($user)
    {
        $query = User::where('username', '=', $user['email'])
            ->where('password', '=', $user['password'])
            ->first();
        return ($query) ? $query : false;
    }
}