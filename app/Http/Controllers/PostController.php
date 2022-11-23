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

    public function getOne($id)
    {
        $post = DB::table('posts')->select('*')->where('id', '=', $id)->get()->all();
        return view('post', compact('post'));
    }

    public function set(Request $request)
    {
        $title = $request->title;
        $description = $request->description;

        DB::table('posts')->insert(compact('title', 'description'));
        return redirect('/');
    }
}
