<?php
class AuthController extends BaseController
{
    public function isLoggedIn()
    {
        $token = Session::get('token');
        if($token)
        {
            $user = new User();
            if ($user->getUser($token))
            {
                return Redirect::to('/index');
            }
            else
            {
                return Redirect::to('/login');
            }
        }
        else
        {
            return Redirect::to('/login');
        }
    }

    public function Login()
    {
        if(Session::has('token'))
        {
            return Redirect::to('/');
        }
        else
        {
            return View::make('layouts.main')->nest('content', 'login');
        }
    }

    public function Register()
    {
        return View::make('layouts.main')->nest('content', 'register');
    }

    public function Proceed()
    {
        $user_credentials = Input::all();
        $user = new User();
        if($user->Correct($user_credentials) === false)
        {
            $user->username = $user_credentials['email'];
            $user->password = $user_credentials['password'];
            $user->token  = $this->makeToken();
            $user->save();
            Session::put('token', $user->token);
            return Redirect::to('/index');
        }
        else
        {
            return View::make('layouts.main')->nest('content', 'error', array('error' => $user_credentials['email'].' already taken'));
        }
    }

    public function makeToken()
    {
        return mt_rand(11111111, 99999999);
    }

    public function Verify()
    {
        $user_credentials = Input::all();
        $user = new User();
        if($user = $user->Correct($user_credentials))
        {
            Session::put('token', $user->token);
            return Redirect::to('/index');
        }
        else
        {
            return Redirect::to('/login');
        }
    }

    public function Logout()
    {
        Session::flush();
        return Redirect::to('/');
    }
}