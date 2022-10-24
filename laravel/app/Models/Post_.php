<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
