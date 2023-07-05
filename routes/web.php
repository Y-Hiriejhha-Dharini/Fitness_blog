<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubscribeController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class,'index'])->name('home');

Route::get('post/{post:slug}', [PostController::class,'show']);

// Route::get('categories/{category:slug}', function(Category $category){
//     return view('posts',['posts' => $category->posts->load(['Category','author']),
//     'categories' => Category::all(),
//     'currentcategory' => $category
//     ]);
// });

// Route::get('authors/{author:username}', function(User $author){
//     return view('posts',['posts' => $author->posts->load(['Category','author']),
//     ]);
// });

Route::get('/hi',function(){
 dd('hi');
});
Route::get('/register/view',[RegisterController::class,'create'])->middleware('guest');
Route::post('/register/create',[RegisterController::class,'store'])->middleware('guest');
Route::get('/login/view',[LoginController::class,'view'])->middleware('guest');
Route::post('/login',[LoginController::class,'login'])->middleware('guest');
Route::post('/logout',[LoginController::class,'destroy'])->middleware('auth');
Route::post('/post/{post:slug}/comment',[CommentController::class,'create']);

Route::get('/create', [PostController::class,'create'])->middleware('auth');
Route::post('/store',[PostController::class,'store'])->middleware('auth');
// Route::post('/edit',[PostController::class,'edit'])->middleware('auth');
// Route::post('/delete',[PostController::class,'destroy'])->middleware('auth');
// Route::get('/ping',[SubscribeController::class,'add']);