<?php

namespace App\Http\Controllers;

use App\Models\ListHarga;
use App\Http\Requests\StoreListHargaRequest;
use App\Http\Requests\UpdateListHargaRequest;

class ListHargaController extends Controller
{
    public function index(){
        return view('prices', [
            "title" => "List Harga",
            "logocompany" => "logosekolah.png",
            "prices" => ListHarga::all()
        ]);
    }

    public function show(listHarga $listharga){
        return view('post', [
            "title" => "Single Post",
            "prices" => $listharga
        ]);
    }

}
