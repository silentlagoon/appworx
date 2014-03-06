<?php
class AuthController extends BaseController
{
    public function Proceed()
    {
        $user_credentials = Input::all();
        $user = new User();
        if($user->Correct($user_credentials) === false)
        {
            $user = $user->Register($user_credentials, $this->makeToken());
            Session::put('token', $user->token);
            return 'Ok';
        }
        else
        {
            return 'Bad';
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
            return 'Ok';
        }
        else
        {
            return 'Bad';
        }
    }

    public function Logout()
    {
        Session::flush();
        return Redirect::to('/');
    }
}