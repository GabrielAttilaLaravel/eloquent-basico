<?php

namespace EloquentORM\Http\Controllers;

use EloquentORM\User;

class QueryController extends Controller
{
    public function eloquentAll()
    {
        $users = User::all();
        $title = 'Todos los usuarios (ALL)';
        return view('query.metodo', compact('users', 'title'));
    }

    public function eloquentGet($gender)
    {
        $users = User::where('gender', $gender)->get();
        $title = 'Lista de usuarios (GET)';
        return view('query.metodo', compact('users', 'title'));
    }
}
