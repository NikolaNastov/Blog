<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only(['addPost','submitPost']);
    }

    public function addPost(){
        return view('creator');
    }

    public function submitPost(){

        $photo = request()->file('image');

        $imagepath = $photo->hashName();
        $photo->move('uploads',$imagepath);
        auth()->user()->posts()->create([
            'title' => request('title'),
            'text' => request('text'),
            'image' => $imagepath
        ]);
        return redirect('/');
    }

    public function viewPost($id){
        $post = Post::find($id);
        return view('viewpost', ['post' =>$post]);
    }
}
