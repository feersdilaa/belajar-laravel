<?php

use Illuminate\Support\Facades\Route;

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
        "title" => "About"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Duarrr",
            "slug" => "judul-pertama",
            "author" => "Jamal",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis id sequi nobis neque magnam ex dolorem reiciendis nemo cum, eaque ipsum, tempore sunt quisquam qui, ipsa ab! Repellendus deserunt culpa minima beatae enim quae consectetur aperiam debitis modi est amet architecto non placeat odio totam, ab cum quo nemo veniam, deleniti quas perspiciatis. Voluptates aperiam similique nemo praesentium, laborum ut rem, neque, excepturi quae at quia odio! Maiores, ipsum. At ullam, porro sapiente nulla quam fugit illum unde consequuntur!"
        ],
        [
            "title" => "Meledak",
            "slug" => "judul-kedua",
            "author" => "Uddin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vitae voluptatibus quo ex voluptas corrupti assumenda alias est in, sequi, soluta facilis, nostrum sit minus incidunt a adipisci tenetur natus excepturi. Incidunt cumque, dolorum neque labore consectetur reiciendis nobis laboriosam iure saepe ut possimus velit similique enim, modi debitis fugit laudantium alias? Animi magni impedit iure provident eligendi repellat nobis commodi expedita totam sint natus ullam rem aut beatae temporibus error voluptatum dolor architecto aliquam, fugit est vel minus. Architecto repellendus temporibus ad voluptate quas dolore aut at libero mollitia? Aliquam dolor cumque voluptatem fuga quidem voluptate, debitis ea ut!"
        ]
    ];


    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function($slug){

    $blog_posts = [
        [
            "title" => "Duarrr",
            "slug" => "judul-pertama",
            "author" => "Jamal",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis id sequi nobis neque magnam ex dolorem reiciendis nemo cum, eaque ipsum, tempore sunt quisquam qui, ipsa ab! Repellendus deserunt culpa minima beatae enim quae consectetur aperiam debitis modi est amet architecto non placeat odio totam, ab cum quo nemo veniam, deleniti quas perspiciatis. Voluptates aperiam similique nemo praesentium, laborum ut rem, neque, excepturi quae at quia odio! Maiores, ipsum. At ullam, porro sapiente nulla quam fugit illum unde consequuntur!"
        ],
        [
            "title" => "Meledak",
            "slug" => "judul-kedua",
            "author" => "Uddin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vitae voluptatibus quo ex voluptas corrupti assumenda alias est in, sequi, soluta facilis, nostrum sit minus incidunt a adipisci tenetur natus excepturi. Incidunt cumque, dolorum neque labore consectetur reiciendis nobis laboriosam iure saepe ut possimus velit similique enim, modi debitis fugit laudantium alias? Animi magni impedit iure provident eligendi repellat nobis commodi expedita totam sint natus ullam rem aut beatae temporibus error voluptatum dolor architecto aliquam, fugit est vel minus. Architecto repellendus temporibus ad voluptate quas dolore aut at libero mollitia? Aliquam dolor cumque voluptatem fuga quidem voluptate, debitis ea ut!"
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if ($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single-Post",
        "post" => $new_post
    ]);
});