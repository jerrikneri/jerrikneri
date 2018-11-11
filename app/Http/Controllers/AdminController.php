<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        return view('admin.admin');
    }
    public function blog()
    {
        return view('admin.pages.blog');
    }
    public function code()
    {
        return view('admin.pages.code');
    }
    public function diary()
    {
        return view('admin.pages.diary');
    }

}
