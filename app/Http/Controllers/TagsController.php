<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function index()
    {
        return Tag::all()
            ->map(function ($tag) {
                return ['name' => $tag->name];
            });
    }
}
