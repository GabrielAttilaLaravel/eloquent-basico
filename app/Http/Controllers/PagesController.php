<?php

namespace EloquentORM\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
}
