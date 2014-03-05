<?php
class PageController extends BaseController
{
    public function Index()
    {
        if(Session::has('token'))
        {
            return View::make('index');
        }
        else
        {
            return Redirect::to('/login');
        }
    }
}