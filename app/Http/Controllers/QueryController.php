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

    public function eloquentGetCustom()
    {
        // pasamos al get como parametro las columans que queremos visualizar
        $users = User::where('gender', 'f')->get(['id', 'name', 'biography']);
        $title = 'Lista de usuarios (GET Custom - con Array)';
        return view('query.metodo', compact('users', 'title'));
    }

    public function eloquentDelete($id)
    {
        // pasamos al get como parametro las columans que queremos visualizar
        $user = User::find($id);
        $user->delete();
        return view('pages.delete');
    }
}
