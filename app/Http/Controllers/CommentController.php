<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post){
        $comment=new Comment();
        $comment->post_id=$post->id;
        $comment->comment=request()->get('comment');
        $comment->save();

        return redirect()->route('posts.show', $post->id)->with('success','Comment submitted');
    }
}
