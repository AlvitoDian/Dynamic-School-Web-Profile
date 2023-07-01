<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{   
    
    public function index(){

        $title = '';
        if (request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' : ' . $category->name;
        }
        
        if (request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "Berita Terbaru" . $title,
            "active" => 'Posts',
            "logocompany" => "logosekolah.png",
            /* "posts" => Post::all() */
            "posts" =>Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    
    public function show(Post $post){

        $title = '';
        if (request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' : ' . $category->name;
        }
        
        if (request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }


        return view('post', [
            "title" => "Single Post" . $title,
            "active" => 'Posts',
            "logocompany" => "SMPN 2 Gedangan",
            "post" => $post,
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
            'categories' => Category::all()
        ]);

        
    }
}
