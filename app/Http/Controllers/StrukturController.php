<?php

namespace App\Http\Controllers;
use App\Models\Struktur;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    public function index(){

        return view('strukturorg', [
        "title" => "Struktur Sekolah",
        "struktur" => Struktur::all(),
        "logocompany" => "logosekolah.png"
    ]);
    }
}
