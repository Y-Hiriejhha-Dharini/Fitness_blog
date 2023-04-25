<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts',
        [   
            // 'posts' => Post::latest('id')->Filter()->get(),
            'posts' => Post::latest('id')->Filter(request(['search','categories','authors']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post',['post' => $post]);
    }

    public function create()
    {
        dd('hi');
        // return view('create');
    }
}
