<?php

namespace App\Http\Controllers;
use App\comment;
use App\Post;
use App\Cat;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CatController extends Controller
{
    public function rodytCat(Cat $cat)
    {
        $cats= Post::where('cat', $cat->cat)->paginate(8);
        return view('pages.cat',compact('cats'));
    }
}

