<?php

namespace EloquentORM\Http\Controllers;

use EloquentORM\User;

class QueryController extends Controller
{
    public function getAll()
    {
        $users = User::all();
        return view('query.all', compact('users'));
    }
}
