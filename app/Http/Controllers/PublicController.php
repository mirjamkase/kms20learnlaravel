<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $name = "Kaspar";
        $array = ['piim', 'sai', 'leib'];
        return view('home', compact('name', 'array'));
    }

    public function posts(){
        return view('posts');
    }
}
