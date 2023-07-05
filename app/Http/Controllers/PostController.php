<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $categories = Category::select('id','name')->get();
        return view('create',['categories'=>$categories]);
    }

    public function store()
    {
        $post = request()->validate([
            'title' => 'required',
            'slug' => 'required',
            // 'img_path' => 'required| image',
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => 'required',
        ]);

        $post += ["user_id" => Auth::user()->id];
        $post += ["img_path" => 'img/'.str_replace(' ','',request()->file('img_path')->getClientOriginalName())];

        request()->img_path->move(public_path('img'), request()->file('img_path')->getClientOriginalName());

        Post::create($post);

        return redirect('/')->with('success','Post Stored Suucessfully');
    }
}