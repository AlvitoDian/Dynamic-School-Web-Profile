<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galery;
use App\Models\Post;
use App\Models\Guru;
use App\Models\Ekstra;


class DashboardController extends Controller
{
     public function index()
    {
        $postscount = Post::count();
        $galeriescount = Galery::count();
        $ekstrascount = Ekstra::count();
        $guruscount = Guru::count();

        return view('dashboard.index', compact('postscount','galeriescount','ekstrascount','guruscount'));
    }
}
