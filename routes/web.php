<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Jamaluddin',
        'email' => 'udinjamal121234@gmail.com',
        'instagram' => 'jmldn13',
        'linkedin' => 'www.linkedin.com/in/jamal-uddin-15ba15223',
        'github' => 'https://github.com/feersdilaa',
        'descryption' => 'Saya adalah seorang undergraduate Teknik Informatika ITS angkatan 22',
        'images' => 'IMG-20240321-WA0002.jpg'
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('posts/{slug}', [PostController::class, 'show']);
    //$new_post = [];
    //foreach($blog_posts as $post) {
    //    if ($post["slug"] === $slug){
    //        $new_post = $post;
    //    }
    //}