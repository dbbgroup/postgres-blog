<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function get()
    {
        $posts = DB::table('posts')->select('*')->get()->all();
        return view('home', compact('posts'));
    }

    public function getOne()
    {
    }

    public function set()
    {
    }
}
