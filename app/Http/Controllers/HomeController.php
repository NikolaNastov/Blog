<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('home');
    }

    public function welcome(){
        $posts = Post::orderBy('id','desc')->take(3)->get();
        return view('welcome',['posts' => $posts]);
    }

    public function getAll(){
        $posts = Post::all();
        return view('all',['posts'=>$posts]);
    }
}
