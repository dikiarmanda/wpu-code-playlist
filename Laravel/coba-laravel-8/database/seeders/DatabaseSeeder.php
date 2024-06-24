<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Diki',
            'username' => 'dikiarmanda',
            'email' => 'diki@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, ipsum reiciendis veniam facere culpa nihil eos! Nemo id nobis recusandae eligendi vitae nostrum possimus architecto mollitia?',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, ipsum reiciendis veniam facere culpa nihil eos! Nemo id nobis recusandae eligendi vitae nostrum possimus architecto mollitia? Autem, eos illo! Iste blanditiis illum itaque illo hic distinctio modi eaque, quas explicabo odit repellat tenetur quasi earum reprehenderit facilis necessitatibus aperiam, odio sit! Sint quaerat dolores vero accusantium libero doloremque ratione esse adipisci placeat aperiam! Sequi aut vel ipsum quasi alias excepturi perferendis doloribus unde tempora voluptate omnis enim dolore cumque, quia iusto consequatur ad tenetur hic harum maxime quae ducimus obcaecati magnam! Id unde saepe quibusdam ut accusantium amet est maiores omnis eum ducimus nostrum ipsam et pariatur doloremque modi ea recusandae doloribus, rerum sint voluptatibus deserunt voluptatum aspernatur. Odio excepturi, reprehenderit laborum impedit sapiente minus. Dignissimos unde molestiae quas laborum, ipsa, nemo dolor perferendis illum amet rerum cum quisquam? Voluptatum necessitatibus sunt, accusamus nulla minima laudantium ipsam perspiciatis modi cum.'
        // ]);
    }
}
