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
        //     'name'=> 'Abdi Dahlan Rangkuti',
        //     'email'=> 'abdidahlan12@gmail.com',
        //     'password'=> bcrypt('123456')
        // ]);

        // User::create([
        //     'name'=> 'Dodi Sandi',
        //     'email'=> 'dodisandi12@gmail.com',
        //     'password'=> bcrypt('123456')
        // ]); 

        User::factory(3)->create();
        
        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::Factory(20)->create();

        Post::create([
            'title' => 'Judul Pertama',
            'slug'  => 'judul-pertama',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit asperiores cumque eaque aperiam. Illum, ipsam? Rem deleniti sint, tempore, debitis eaque veniam exercitationem nihil perspiciatis neque esse maxime veritatis hic possimus optio magnam quos dolor! Voluptate non inventore, amet delectus asperiores omnis id repellendus. Aut debitis, voluptatum impedit exercitationem et cumque aliquid veniam reiciendis nam rerum quisquam eveniet ipsum ipsam. Pariatur et ipsam quae sequi asperiores obcaecati laborum, nemo dignissimos odio aperiam ullam libero. Dolorum qui eligendi repellendus ducimus illum reprehenderit temporibus? Mollitia vitae veniam natus voluptates, totam repellendus quod, quos eum at non magnam velit eos qui fugiat dignissimos?',
            'category_id' =>1,
            'user_id' =>1
        ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug'  => 'judul-ke-dua',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit asperiores cumque eaque aperiam. Illum, ipsam? Rem deleniti sint, tempore, debitis eaque veniam exercitationem nihil perspiciatis neque esse maxime veritatis hic possimus optio magnam quos dolor! Voluptate non inventore, amet delectus asperiores omnis id repellendus. Aut debitis, voluptatum impedit exercitationem et cumque aliquid veniam reiciendis nam rerum quisquam eveniet ipsum ipsam. Pariatur et ipsam quae sequi asperiores obcaecati laborum, nemo dignissimos odio aperiam ullam libero. Dolorum qui eligendi repellendus ducimus illum reprehenderit temporibus? Mollitia vitae veniam natus voluptates, totam repellendus quod, quos eum at non magnam velit eos qui fugiat dignissimos?',
        //     'category_id' =>1,
        //     'user_id' =>1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug'  => 'judul-ke-tiga',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit asperiores cumque eaque aperiam. Illum, ipsam? Rem deleniti sint, tempore, debitis eaque veniam exercitationem nihil perspiciatis neque esse maxime veritatis hic possimus optio magnam quos dolor! Voluptate non inventore, amet delectus asperiores omnis id repellendus. Aut debitis, voluptatum impedit exercitationem et cumque aliquid veniam reiciendis nam rerum quisquam eveniet ipsum ipsam. Pariatur et ipsam quae sequi asperiores obcaecati laborum, nemo dignissimos odio aperiam ullam libero. Dolorum qui eligendi repellendus ducimus illum reprehenderit temporibus? Mollitia vitae veniam natus voluptates, totam repellendus quod, quos eum at non magnam velit eos qui fugiat dignissimos?',
        //     'category_id' =>2,
        //     'user_id' =>1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug'  => 'judul-ke-empat',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'  =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit asperiores cumque eaque aperiam. Illum, ipsam? Rem deleniti sint, tempore, debitis eaque veniam exercitationem nihil perspiciatis neque esse maxime veritatis hic possimus optio magnam quos dolor! Voluptate non inventore, amet delectus asperiores omnis id repellendus. Aut debitis, voluptatum impedit exercitationem et cumque aliquid veniam reiciendis nam rerum quisquam eveniet ipsum ipsam. Pariatur et ipsam quae sequi asperiores obcaecati laborum, nemo dignissimos odio aperiam ullam libero. Dolorum qui eligendi repellendus ducimus illum reprehenderit temporibus? Mollitia vitae veniam natus voluptates, totam repellendus quod, quos eum at non magnam velit eos qui fugiat dignissimos?',
        //     'category_id' =>2,
        //     'user_id' =>2
        // ]);
    } 
}
