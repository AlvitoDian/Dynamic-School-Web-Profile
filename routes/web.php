<?php

use App\Models\Guru;
use App\Models\Post;
use App\Models\Ekstra;
use App\Models\Galery;
use App\Models\Jadwal;
use App\Models\Category;
use App\Models\Struktur;
use App\Models\Sop;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListHargaController;
use App\Http\Controllers\SOPController;
use App\Http\Controllers\DashboardGuruController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardEkstraController;
use App\Http\Controllers\DashboardGaleryController;
use App\Http\Controllers\DashboardJadwalController;
use App\Http\Controllers\DashboardStrukturController;
use App\Http\Controllers\DashboardSopController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home",
        "logocompany" => "logosekolah.png",
        'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
        'galeries' => Galery::all(),
        'gurucount' => Guru::count(),
        'ekstracount' => Ekstra::count()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Alvito Dian",
        "email" => "alvid@gmail.com",
        "image" => "/background/bgspn2gd.jpeg",
        "logocompany" => "logosekolah.png"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/prices', [ListHargaController::class, 'index']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        "logocompany" => "logosekolah.png",
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

/* Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth'); */

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('dashboard/galery', DashboardGaleryController::class)->middleware('auth');

Route::resource('dashboard/guru', DashboardGuruController::class)->middleware('auth');

Route::resource('dashboard/ekstra', DashboardEkstraController::class)->middleware('auth');

Route::resource('dashboard/struktur', DashboardStrukturController::class)->middleware('auth');

Route::resource('dashboard/jadwal', DashboardJadwalController::class)->middleware('auth');

Route::resource('dashboard/sop', DashboardSopController::class)->middleware('auth');

Route::get('/galeries', [GaleryController::class, 'index']);

Route::get('/visimisi', function () {
    return view('visimisi', [
        "title" => "Visi dan Misi",
        "active" => "Profile",
        "logocompany" => "logosekolah.png"
    ]);
});

Route::get('/listguru', [GuruController::class, 'index']);

Route::get('/ekstra', [EkstraController::class, 'index']);

Route::get('/strukturorg', [StrukturController::class, 'index']);

Route::get('/jadwalpemb', [JadwalController::class, 'index']);

Route::get('/sop', [SOPController::class, 'index']);