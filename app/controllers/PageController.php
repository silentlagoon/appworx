<?php
class PageController extends BaseController
{

    public function Index()
    {
        return View::make('layouts.main')->nest('content', 'index');
    }
}