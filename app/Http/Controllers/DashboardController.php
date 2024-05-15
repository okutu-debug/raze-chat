<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard',[
            'posts'=> Post::orderBy('created_at', 'DESC')->paginate(5)
        ]);
    }


    public function loadMorePosts(Request $request){
        $posts = Post::orderBy('created_at', 'DESC')->paginate(5, ['*'], 'page', $request->page);

        // Render the posts using a blade view and return it as JSON
        $html = view('posts', compact('posts'))->render();
        return response()->json(['posts' => $html]);
    }



}
