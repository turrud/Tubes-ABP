<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;
use GuzzleHttp\Middleware;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardBeritaController;
use App\Models\Category;

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

Route::get('/paketWisata', function () {
    return view('PaketWisata');
});
Route::get('/sewaKendaraan', function () {
    return view('SewaKendaraan');
});


Route::get('/', [WelcomeController::class, 'index']);
// Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function () {
    return view('Dashboard.index');
});
Route::get('/form-sewa', function () {
    return view('order.FormSewa');
});

Route::get('/form-paket', function () {
    return view('order.FormPaket');
});


Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{news:slug}', [BeritaController::class, 'show']);

Route::resource('dashboard/berita', DashboardBeritaController::class)->middleware('auth');


Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'category' => $category->name,
        'beritas' => $category->beritas,
    ]);
});