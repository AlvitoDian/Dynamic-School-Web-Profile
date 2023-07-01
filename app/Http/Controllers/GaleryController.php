<?php

namespace App\Http\Controllers;
use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index(){

        return view('galeries', [
            "title" => "Galeri",
            /* "active" => 'Posts', */
            "galeries" => Galery::all(),
            "logocompany" => "logosekolah.png"
            /* "posts" => Post::all() */
            /* "posts" =>Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString() */
        ]);
    }
}
