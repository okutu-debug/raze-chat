<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function show2($post){
    //     $post = Post::findOrFail($post);
    //     return view('posts.show', ['post' => $post]);
    // }

    public function show(Post $id){
        return view('posts.show', [
            'post'=>$id
        ]);
    }

    public function store(){
        $validated=request()->validate([
            'post'=>'required'
        ]);

        Post::create($validated);
        return redirect()->route('dashboard')->with('success','');
    }

}
