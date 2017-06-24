<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    //
    public function index()  
    {
        $users = ['Wesley' , 'Matheus' , 'Guilherme'];

        return view('user.index' , compact('users'));
    }

    public function show($id) 
    {
        return view('user.show', compact('id'));
    }


    public function create() 
    {
        return view('user.create');
    }

    public function post(Request $request) {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required','email'],
            'password' => ['required', 'confirmed', 'min:4']
        ]);
    }
}
