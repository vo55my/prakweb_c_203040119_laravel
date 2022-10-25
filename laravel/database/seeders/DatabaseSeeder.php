<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Dhaifullah Hilmy',
        //     'email' => 'dhaifullahhilmy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Mick Jagger',
        //     'email' => 'mickjagger@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, quibusdam officiis nihil fugiat illum adipisci dignissimos voluptatibus quidem perspiciatis pariatur, reiciendis necessitatibus laboriosam possimus enim rem voluptas ipsam quo facere totam cumque aperiam et? Deserunt veritatis sapiente natus consequuntur ullam, et id, repellat quod dolores inventore ducimus earum qui adipisci vel cupiditate commodi? Saepe sed debitis est explicabo enim, rerum suscipit? Quo ipsa accusamus assumenda corporis, nobis sed aliquid perferendis veritatis? Necessitatibus repellendus a reprehenderit, natus consequatur autem voluptatum quis, fugit harum vero numquam provident, ipsa itaque nostrum cupiditate aliquid iste molestias rerum dolorem ipsam dignissimos. Odit aperiam fugiat rem facilis maxime quasi eius vel dolorem quos? Animi, numquam ad nam molestiae asperiores repellat doloremque aperiam consectetur quos explicabo architecto!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, quibusdam officiis nihil fugiat illum adipisci dignissimos voluptatibus quidem perspiciatis pariatur, reiciendis necessitatibus laboriosam possimus enim rem voluptas ipsam quo facere totam cumque aperiam et? Deserunt veritatis sapiente natus consequuntur ullam, et id, repellat quod dolores inventore ducimus earum qui adipisci vel cupiditate commodi? Saepe sed debitis est explicabo enim, rerum suscipit? Quo ipsa accusamus assumenda corporis, nobis sed aliquid perferendis veritatis? Necessitatibus repellendus a reprehenderit, natus consequatur autem voluptatum quis, fugit harum vero numquam provident, ipsa itaque nostrum cupiditate aliquid iste molestias rerum dolorem ipsam dignissimos. Odit aperiam fugiat rem facilis maxime quasi eius vel dolorem quos? Animi, numquam ad nam molestiae asperiores repellat doloremque aperiam consectetur quos explicabo architecto!',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, quibusdam officiis nihil fugiat illum adipisci dignissimos voluptatibus quidem perspiciatis pariatur, reiciendis necessitatibus laboriosam possimus enim rem voluptas ipsam quo facere totam cumque aperiam et? Deserunt veritatis sapiente natus consequuntur ullam, et id, repellat quod dolores inventore ducimus earum qui adipisci vel cupiditate commodi? Saepe sed debitis est explicabo enim, rerum suscipit? Quo ipsa accusamus assumenda corporis, nobis sed aliquid perferendis veritatis? Necessitatibus repellendus a reprehenderit, natus consequatur autem voluptatum quis, fugit harum vero numquam provident, ipsa itaque nostrum cupiditate aliquid iste molestias rerum dolorem ipsam dignissimos. Odit aperiam fugiat rem facilis maxime quasi eius vel dolorem quos? Animi, numquam ad nam molestiae asperiores repellat doloremque aperiam consectetur quos explicabo architecto!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, quibusdam officiis nihil fugiat illum adipisci dignissimos voluptatibus quidem perspiciatis pariatur, reiciendis necessitatibus laboriosam possimus enim rem voluptas ipsam quo facere totam cumque aperiam et? Deserunt veritatis sapiente natus consequuntur ullam, et id, repellat quod dolores inventore ducimus earum qui adipisci vel cupiditate commodi? Saepe sed debitis est explicabo enim, rerum suscipit? Quo ipsa accusamus assumenda corporis, nobis sed aliquid perferendis veritatis? Necessitatibus repellendus a reprehenderit, natus consequatur autem voluptatum quis, fugit harum vero numquam provident, ipsa itaque nostrum cupiditate aliquid iste molestias rerum dolorem ipsam dignissimos. Odit aperiam fugiat rem facilis maxime quasi eius vel dolorem quos? Animi, numquam ad nam molestiae asperiores repellat doloremque aperiam consectetur quos explicabo architecto!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
