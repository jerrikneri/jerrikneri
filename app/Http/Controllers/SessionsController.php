<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }
    public function create()
    {
        return view('session.create');
    }
    public function login()
    {
        if(!auth()->attempt(request(['email', 'password'])))
        {
            return back()->withErrors([
                'message' => 'Check credentials.'
            ]);
        }
        return redirect()->home();
    }
    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
