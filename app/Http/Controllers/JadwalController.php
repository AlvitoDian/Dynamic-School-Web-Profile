<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(){

        return view('jadwalpemb', [
        "title" => "Struktur Sekolah",
        "jadwal" => Jadwal::all(),
        "logocompany" => "logosekolah.png"
    ]);
    }
}
