<?php

namespace App\Models;

class Post 
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug"  => "judul-post-pertama",
            "author" => "By : Abdi Dahlan Rangkuti",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Perspiciatis, reiciendis cupiditate dicta ex reprehenderit, corrupti quisquam nesciunt cum sed officia commodi? 
            Ullam praesentium recusandae repudiandae asperiores, dolorum nam voluptas deleniti velit adipisci sed quae voluptates 
            ea molestias delectus veniam dolorem laboriosam dolor? Possimus hic eligendi autem id animi fugit ipsum minima et architecto 
            qui beatae mollitia veniam provident cupiditate assumenda, perferendis vero veritatis ex velit corrupti? Suscipit, praesentium illo, incidunt tenetur 
            mollitia quas dolorem voluptatum illum magnam culpa molestias voluptatem?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug"  => "judul-post-kedua",
            "author" => "By : Agus Wibowo",
            "body" => "cupiditate dicta ex reprehenderit, corrupti quisquam nesciunt cum sed officia commodi? 
            Ullam praesentium recusandae repudiandae asperiores, dolorum nam voluptas deleniti velit adipisci sed quae voluptates 
            ea molestias delectus veniam dolorem laboriosam dolor? Possimus hic eligendi autem id animi fugit ipsum minima et architecto 
            qui beatae mollitia veniam provident cupiditate assumenda, perferendis vero veritatis ex velit corrupti? Suscipit, praesentium illo, incidunt tenetur 
            mollitia quas dolorem voluptatum illum magnam culpa molestias voluptatem?"
        ],
        
    ];

    public static function all()
        {
             return collect(self::$blog_post);
        }
     
        public static function find($slug)
            {
                $posts = static::all();
                
                // $post = [];                  
                // foreach ($posts as $p ){         //ada foreach di ambil dari "blog_post as di kasih nama post 
                //     if($p["slug"] === $slug){    //jika post yang key nya itu slug sama dengan slug, maka ambil postingan itu
                //     $post = $p;                  //buat aray baru untuk nampung, new post diisi oleh post
                
                return $posts->firstWhere('slug',$slug);
            }
        
        //return $post;
}   


