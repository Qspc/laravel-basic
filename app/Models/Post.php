<?php

namespace App\Models;



class post {
    private static $blog_posts =[
        [
            "title" => "sang penari",
            "slug" => "sang-penari",
            "author" => "qspc",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, minus! 
            Pariatur illum soluta laborum perspiciatis, vitae velit! Eligendi eaque quidem reprehenderit. 
            Sit magnam id cupiditate eveniet quibusdam corrupti voluptates at laborum alias, totam porro, 
            consectetur nesciunt odit, architecto eligendi obcaecati tenetur adipisci. Autem harum eum, 
            cumque mollitia sequi tempore! Vero consequuntur incidunt alias quidem asperiores cumque corrupti 
            consectetur omnis repudiandae."
        ],
        [
            "title" => "sang penakluk",
            "slug" => "sang-penakluk",
            "author" => "spidpes",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, minus! 
            Pariatur illum soluta laborum perspiciatis, vitae velit! Eligendi eaque quidem reprehenderit. 
            Sit magnam id cupiditate eveniet quibusdam corrupti voluptates at laborum alias, totam porro, 
            consectetur nesciunt odit"
        ]
        ];

        public static function all() {
            return collect(self::$blog_posts); 
        }

        public static function find($slug) {
            $posts = static::all();
            return $posts->firstWhere("slug", $slug);
        }
}

