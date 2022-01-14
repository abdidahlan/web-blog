<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\PostController;
use App\Models\Category;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function (){
    return view('home', [
        "title" => "home" 
    ]);
});

Route::get('/about', function(){
    return view('about', [
        "title" => "about",
        "name" => "Abdi Dahlan Rangkuti",
        "email" => "abdidahlan12@gmail.com",
        "image" => "image.jpg"   
    ]);
});

Route::get('/blog',[PostController::class,'index']);
Route::get('posts/{post:slug}', [PostController::class,'show']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[ 
    'title' =>$category ->name,
    'posts' =>$category ->posts,
    'category' =>$category->name
    ]);
});

Route::get ('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

