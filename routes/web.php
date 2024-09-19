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
        ],
        [
            "title" => "Gajadi",
            "slug" => "judul-ketiga",
            "author" => "Hajar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ut illo nulla ea ad rem laborum sed expedita dolores? Esse, veritatis et. Voluptates placeat veniam voluptatum voluptate consequatur. Similique voluptatum, facere molestias fugiat sint deleniti cumque eum voluptas adipisci, voluptate laboriosam dignissimos. Velit pariatur esse, tenetur inventore iure numquam aut fugit. Eligendi ratione nisi quod cupiditate, aspernatur reiciendis commodi facilis. Reiciendis, rem culpa ullam cumque quaerat, et hic optio commodi repudiandae placeat incidunt nam at tempora cupiditate? Aliquam, temporibus. Aliquam dolorem blanditiis consequatur ad, adipisci saepe tempora eaque similique eos in nam recusandae, alias perferendis illo cum aperiam libero architecto."
        ],
        [
            "title" => "Jadi",
            "slug" => "judul-keempat",
            "author" => "Saja",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque quas veniam doloremque aperiam corporis a fuga, eveniet blanditiis accusantium culpa fugit praesentium. Qui dolorum quia deserunt. Cumque mollitia fuga dolorum facilis et odio nostrum, at id nam consectetur nobis labore aliquam. Consectetur pariatur fugiat praesentium maiores ab numquam error amet quidem reiciendis voluptatum eveniet ratione magni inventore possimus similique a sed, repellendus nostrum. Eius porro sed deserunt explicabo voluptatum maxime? Reprehenderit est accusamus distinctio nam aspernatur sapiente optio itaque impedit inventore molestias magni sint velit, nihil laborum. A doloribus eveniet animi facere molestias temporibus amet veritatis maxime? Nihil repellendus quae veritatis non aliquid. Veniam aliquid consequatur quaerat facere natus impedit voluptatibus, repellat cumque excepturi, ad corporis similique hic consequuntur! Minus?"
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
        ],
        [
            "title" => "Gajadi",
            "slug" => "judul-ketiga",
            "author" => "Hajar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ut illo nulla ea ad rem laborum sed expedita dolores? Esse, veritatis et. Voluptates placeat veniam voluptatum voluptate consequatur. Similique voluptatum, facere molestias fugiat sint deleniti cumque eum voluptas adipisci, voluptate laboriosam dignissimos. Velit pariatur esse, tenetur inventore iure numquam aut fugit. Eligendi ratione nisi quod cupiditate, aspernatur reiciendis commodi facilis. Reiciendis, rem culpa ullam cumque quaerat, et hic optio commodi repudiandae placeat incidunt nam at tempora cupiditate? Aliquam, temporibus. Aliquam dolorem blanditiis consequatur ad, adipisci saepe tempora eaque similique eos in nam recusandae, alias perferendis illo cum aperiam libero architecto."
        ],
        [   
            "title" => "Jadi",  
            "slug" => "judul-keempat",
            "author" => "Saja",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque quas veniam doloremque aperiam corporis a fuga, eveniet blanditiis accusantium culpa fugit praesentium. Qui dolorum quia deserunt. Cumque mollitia fuga dolorum facilis et odio nostrum, at id nam consectetur nobis labore aliquam. Consectetur pariatur fugiat praesentium maiores ab numquam error amet quidem reiciendis voluptatum eveniet ratione magni inventore possimus similique a sed, repellendus nostrum. Eius porro sed deserunt explicabo voluptatum maxime? Reprehenderit est accusamus distinctio nam aspernatur sapiente optio itaque impedit inventore molestias magni sint velit, nihil laborum. A doloribus eveniet animi facere molestias temporibus amet veritatis maxime? Nihil repellendus quae veritatis non aliquid. Veniam aliquid consequatur quaerat facere natus impedit voluptatibus, repellat cumque excepturi, ad corporis similique hic consequuntur! Minus?"
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