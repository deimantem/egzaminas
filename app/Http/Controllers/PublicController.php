<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PublicController extends Controller
{
    public function rodyt()
    {
        $posts = Post::paginate(2);
        $cats= DB::table('cats')->get();
        return view('pages.home', ['cats' => $cats], compact('posts'));
    }

    public function rodytvisa(Post $post)
    {
        $cats= DB::table('cats')->get();
        return view('pages.full',['cats' => $cats], compact('post'));
    }



}