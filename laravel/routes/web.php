<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Dhaifullah Hilmy",
        "email" => "dhaifullahhilmy@gmail.com",
        "image" => "hilmy.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dhaifullah Hilmy",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti dolore ullam aut dolor labore eum ipsum, distinctio laudantium molestias corporis inventore iste hic? Sit mollitia aperiam labore dolorum voluptatem minima, odio neque quod impedit laboriosam vel dolor delectus nesciunt et temporibus facilis dicta autem vitae enim quis. Debitis enim quod eaque minima iste, impedit ratione, odio, hic veniam repellendus aspernatur explicabo? Facere reiciendis eius neque asperiores cupiditate assumenda similique atque, tempora, dignissimos quasi perferendis quidem officiis molestiae molestias sunt. Quo."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Varun Batra",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur unde quas vitae quasi doloremque, quis quae repellat, facilis laborum aliquam molestias beatae error illo commodi perferendis magnam voluptatum, similique laboriosam doloribus nam ad voluptates perspiciatis! Distinctio quibusdam quos natus officiis neque a. Iusto vitae ullam soluta nihil, odit expedita, reprehenderit maxime sequi dolorem dolorum praesentium est, illo porro. Ipsum magni autem exercitationem quaerat dolorem debitis aut id voluptate illum perspiciatis quod est, maiores, sint obcaecati dicta accusamus, distinctio quam repellendus. Vitae quam qui eius natus culpa nihil porro mollitia nobis perferendis placeat veniam, minus quia suscipit sed quas enim est?"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dhaifullah Hilmy",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti dolore ullam aut dolor labore eum ipsum, distinctio laudantium molestias corporis inventore iste hic? Sit mollitia aperiam labore dolorum voluptatem minima, odio neque quod impedit laboriosam vel dolor delectus nesciunt et temporibus facilis dicta autem vitae enim quis. Debitis enim quod eaque minima iste, impedit ratione, odio, hic veniam repellendus aspernatur explicabo? Facere reiciendis eius neque asperiores cupiditate assumenda similique atque, tempora, dignissimos quasi perferendis quidem officiis molestiae molestias sunt. Quo."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Varun Batra",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur unde quas vitae quasi doloremque, quis quae repellat, facilis laborum aliquam molestias beatae error illo commodi perferendis magnam voluptatum, similique laboriosam doloribus nam ad voluptates perspiciatis! Distinctio quibusdam quos natus officiis neque a. Iusto vitae ullam soluta nihil, odit expedita, reprehenderit maxime sequi dolorem dolorum praesentium est, illo porro. Ipsum magni autem exercitationem quaerat dolorem debitis aut id voluptate illum perspiciatis quod est, maiores, sint obcaecati dicta accusamus, distinctio quam repellendus. Vitae quam qui eius natus culpa nihil porro mollitia nobis perferendis placeat veniam, minus quia suscipit sed quas enim est?"
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
