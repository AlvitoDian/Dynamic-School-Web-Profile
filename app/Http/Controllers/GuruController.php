<?php

namespace App\Http\Controllers;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){

        return view('listguru', [
            "title" => "Tenaga Pendidik",
            "gurus" => Guru::all(),          
            "logocompany" => "logosekolah.png"
            /* "posts" => Post::all() */
            /* "posts" =>Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString() */
        ]);
    }
}
