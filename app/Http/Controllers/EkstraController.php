<?php

namespace App\Http\Controllers;
use App\Models\Ekstra;
use Illuminate\Http\Request;

class EkstraController extends Controller
{
    public function index(){

        return view('ekstra', [
            "title" => "Ekstrakurikuler",
            "ekstras" => Ekstra::all(),          
            "logocompany" => "logosekolah.png"
            /* "posts" => Post::all() */
            /* "posts" =>Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString() */
        ]);
    }
}
