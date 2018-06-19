<?php

namespace App\Http\Controllers;

use App\Post;
use App\Cat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function posts()
    {
        $cats = DB::table('cats')->get();

        return view('pages.naujas', ['cats' => $cats]);
    }

    public function saugok()
    {
        $this->validate(request(),
            ['title' => 'name',
                'body' => 'desc']);
        Post::create([
            'cat' => request('cat'),
            'name' => request('name'),
            'desc' => request('desc'),
            'user_id' => auth()->id(),

        ]);
        return redirect('/');
    }

    public function edit(Post $post)
    {
        $cats = DB::table('cats')->get();

        if (Gate::denies('edit-post', $post)) {
            return view('pages.restrict');
        }
        return view('pages.edit', ['cats' => $cats],compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        Post::where('id', $post->id)->update($request->only(['name', 'desc']));
        return redirect('/');
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }

    public function loadadmin(){
        $posti = DB::table('posts')->where('user_id',Auth::id())->get();
        $cats = DB::table('cats')->get();

        return view('pages.admin',['cats' => $cats],compact( 'posti'));
    }



}
