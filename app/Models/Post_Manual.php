<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Alvito Dian",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus adipisci asperiores suscipit eligendi repudiandae quaerat, dignissimos nostrum sapiente quia itaque minus cumque facere nisi ab quidem id non! Culpa quis qui ipsam molestiae cumque odit blanditiis minima vitae cupiditate aperiam suscipit eveniet, ullam asperiores praesentium natus impedit illum enim ipsum, doloremque quae nihil. Expedita ipsum dolor beatae at excepturi ex maxime eos, dolores inventore molestias unde a eaque, hic amet ea? Temporibus pariatur earum corrupti magnam praesentium. Nam, iusto veritatis?"
        ],
        [
            "title" => "Judul Gunawan",
            "slug" => "judul-kedua",
            "author" => "Gunawan Tahu Bulat",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio corrupti repellendus vitae quasi nihil, saepe possimus ipsum quod ea cumque? Suscipit, sint eos. Quae, laudantium facere asperiores numquam quibusdam pariatur placeat velit sed fugiat doloribus libero debitis voluptatum suscipit aspernatur eum nulla aperiam similique animi praesentium aut sint cum delectus beatae. Corporis odit vitae quae deleniti et molestiae. Praesentium commodi tempora voluptatibus ad sequi ratione vitae repellat accusamus rerum nam veniam in corporis, cumque nostrum nihil voluptates labore itaque facere inventore aliquid fugiat? Quas ullam sequi sed. Ratione rerum adipisci placeat doloremque voluptatum neque deserunt suscipit repellendus nulla. Eum, labore!"
        ],
        [
            "title" => "Judul Farhan Kebab",
            "slug" => "judul-ketiga",
            "author" => "Farhan Kebab",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio corrupti repellendus vitae quasi nihil, saepe possimus ipsum quod ea cumque? Suscipit, sint eos. Quae, laudantium facere asperiores numquam quibusdam pariatur placeat velit sed fugiat doloribus libero debitis voluptatum suscipit aspernatur eum nulla aperiam similique animi praesentium aut sint cum delectus beatae. Corporis odit vitae quae delenitirporis, cumque nostrum nihil voluptates labore itaque facere inventore aliquid fugiat? Quas ullam sequi sed. Ratione rerum adipisci placeat doloremque voluptatum neque deserunt suscipit repellendus nulla. Eum, labore!"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
