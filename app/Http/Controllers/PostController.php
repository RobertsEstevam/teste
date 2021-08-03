<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showForm()
    {
        return view('form');

    }

    public function debug(Request $request)
    {
        dd($request->except(['_token']));

       $post = new  post();
       $post->title = $request->title;
       $post->subtitle = $request->subtitle;
       $post->content = $request->content;
       $post->save();
       //$post->create($request->except(['_token']));

    }
}
