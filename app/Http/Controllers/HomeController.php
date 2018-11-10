<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth', ['only' => 'index']);
    }

    public function index()
    {

    }
    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('auth.login');
    }
    public function postLogin()
    {
        return view('auth.login');
    }
}
