<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        $posts = DB::select('select * from musa');
        return view('posts.index')->with('posts',$posts);
    }

}
