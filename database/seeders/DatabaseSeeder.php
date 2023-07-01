<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\ListHarga;
use App\Models\Category;
use App\Models\Post;
use App\Models\Guru;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         

          User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin',
            'password' => bcrypt('admin')
         ]);

         /*
         User::create([
            'name' => 'HanHan',
            'email' => 'kebab@gmail.com',
            'password' => bcrypt('12345')
         ]); */
         
        Guru::factory(12)->create(); 
        
        Post::factory(20)->create(); 

         Category::create([
            'name' => 'Pengumuman',
            'slug' => 'pengumuman'
         ]);
         
         Category::create([
            'name' => 'Kegiatan',
            'slug' => 'kegiatan'
         ]);
         
         Category::create([
            'name' => 'Prestasi',
            'slug' => 'prestasi'
         ]);
         
         

        /*  ListHarga::factory(20)->create(); */

        /*  Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
         ]); */

         /* Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo fuga illum mollitia molestiae quibusdam. Laboriosam esse fugiat voluptatem neque magnam reprehenderit inventore ',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo fuga illum mollitia molestiae quibusdam. Laboriosam esse fugiat voluptatem neque magnam reprehenderit inventore voluptatum nobis. Laudantium recusandae vel odit doloribus facere, labore nobis ducimus magni temporibus sapiente illum perferendis vitae quos. Quam quidem at commodi officia fugiat dolor laborum quae sint inventore velit excepturi praesentium illum eligendi nam est, vel numquam unde recusandae? Excepturi nemo asperiores nobis temporibus placeat, qui molestiae. Magni, mollitia exercitationem odit dicta quas quaerat aperiam cupiditate officiis labore assumenda ut nihil odio quisquam ab incidunt pariatur, consequuntur atque hic nisi amet ipsam sequi! Nostrum reprehenderit voluptate unde.',
            'category_id' => 1,
            'user_id' => 1
         ]);

         Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo fuga illum mollitia molestiae quibusdam. Laboriosam esse fugiat voluptatem neque magnam reprehenderit inventore ',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo fuga illum mollitia molestiae quibusdam. Laboriosam esse fugiat voluptatem neque magnam reprehenderit inventore voluptatum nobis. Laudantium recusandae vel odit doloribus facere, labore nobis ducimus magni temporibus sapiente illum perferendis vitae quos. Quam quidem at commodi officia fugiat dolor laborum quae sint inventore velit excepturi praesentium illum eligendi nam est, vel numquam unde recusandae? Excepturi nemo asperiores nobis temporibus placeat, qui molestiae. Magni, mollitia exercitationem odit dicta quas quaerat aperiam cupiditate officiis labore assumenda ut nihil odio quisquam ab incidunt pariatur, consequuntur atque hic nisi amet ipsam sequi! Nostrum reprehenderit voluptate unde.',
            'category_id' => 1,
            'user_id' => 1
         ]);

         Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo fuga illum mollitia molestiae quibusdam. Laboriosam esse fugiat voluptatem neque magnam reprehenderit inventore ',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo fuga illum mollitia molestiae quibusdam. Laboriosam esse fugiat voluptatem neque magnam reprehenderit inventore voluptatum nobis. Laudantium recusandae vel odit doloribus facere, labore nobis ducimus magni temporibus sapiente illum perferendis vitae quos. Quam quidem at commodi officia fugiat dolor laborum quae sint inventore velit excepturi praesentium illum eligendi nam est, vel numquam unde recusandae? Excepturi nemo asperiores nobis temporibus placeat, qui molestiae. Magni, mollitia exercitationem odit dicta quas quaerat aperiam cupiditate officiis labore assumenda ut nihil odio quisquam ab incidunt pariatur, consequuntur atque hic nisi amet ipsam sequi! Nostrum reprehenderit voluptate unde.',
            'category_id' => 2,
            'user_id' => 1
         ]);
         
         Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo fuga illum mollitia molestiae quibusdam. Laboriosam esse fugiat voluptatem neque magnam reprehenderit inventore ',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo fuga illum mollitia molestiae quibusdam. Laboriosam esse fugiat voluptatem neque magnam reprehenderit inventore voluptatum nobis. Laudantium recusandae vel odit doloribus facere, labore nobis ducimus magni temporibus sapiente illum perferendis vitae quos. Quam quidem at commodi officia fugiat dolor laborum quae sint inventore velit excepturi praesentium illum eligendi nam est, vel numquam unde recusandae? Excepturi nemo asperiores nobis temporibus placeat, qui molestiae. Magni, mollitia exercitationem odit dicta quas quaerat aperiam cupiditate officiis labore assumenda ut nihil odio quisquam ab incidunt pariatur, consequuntur atque hic nisi amet ipsam sequi! Nostrum reprehenderit voluptate unde.',
            'category_id' => 2,
            'user_id' => 2
         ]); */
    }
}
