<?php
class PageController extends BaseController
{

    public function Index()
    {
        if(Session::has('token'))
        {
            return View::make('layouts.main')->nest('content', 'index');
        }
        else
        {
            return Redirect::to('/login');
        }
    }
}