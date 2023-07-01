<?php

namespace App\Http\Controllers;
use App\Models\Sop;
use Illuminate\Http\Request;

class SOPController extends Controller
{
    public function index(){

        return view('sop', [
        "title" => "Standar Operasional",
        "sops" => Sop::all(), 
        "logocompany" => "logosekolah.png"
    ]);
    }
}
