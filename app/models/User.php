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
        $query = User::where('email', '=', $user['email'])
            ->where('password', '=', $user['password'])
            ->first();
        return ($query) ? $query : false;
    }

    public function Register($user_credentials, $token)
    {
        $user = new User();
        $user->email = $user_credentials['email'];
        $user->password = $user_credentials['password'];
        $user->token  = $token;
        $user->save();
        return $user;
    }
}