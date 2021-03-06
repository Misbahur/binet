<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\HotNewsController;
use App\Http\Controllers\SebudNewsController;
use App\Http\Controllers\EkonomiNewsController;
use App\Http\Controllers\HiburanController;
use App\Http\Controllers\GayaHidupNewsController;
use App\Http\Controllers\LokalController;
use App\Http\Controllers\NasionalController;
use App\Http\Controllers\InternationalController;
use App\Http\Controllers\LiveController;


// Dashboard
// Admin
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\KategoriController;
use App\Http\Controllers\Dashboard\AdminBeritaController;
use App\Http\Controllers\Dashboard\AdminStatusBeritaController;
use App\Http\Controllers\Dashboard\AdminAuthorController;
use App\Http\Controllers\Dashboard\IklanController;
use App\Http\Controllers\Dashboard\AdminVideoController;
use App\Http\Controllers\Dashboard\AdminLiveController;
// Author
use App\Http\Controllers\Dashboard\AuthorDashboardController;
use App\Http\Controllers\Dashboard\BeritaController;
use App\Http\Controllers\Dashboard\StatusController;
use App\Http\Controllers\Dashboard\AuthorVidioController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hotNews', [HotNewsController::class, 'index'])->name('hotNews');
Route::get('/hotNews/{slug}', [HotNewsController::class, 'show'])->name('hotNews.show');
Route::get('/ekonomi', [EkonomiNewsController::class, 'index'])->name('ekonomi');
Route::get('/ekonomi/{slug}', [EkonomiNewsController::class, 'show'])->name('ekonomi.show');
Route::get('/sejarah&budaya', [SebudNewsController::class, 'index'])->name('sejarah&budaya');
Route::get('/sejarah&budaya/{slug}', [SebudNewsController::class, 'show'])->name('sejarah&budaya.show');
Route::get('/hiburan', [HiburanController::class, 'index'])->name('hiburan');
Route::get('/hiburan/{slug}', [HiburanController::class, 'show'])->name('hiburan.show');
Route::get('/gayahidup', [GayaHidupNewsController::class, 'index'])->name('gayahidup');
Route::get('/gayahidup/{slug}', [GayaHidupNewsController::class, 'show'])->name('gayahidup.show');
Route::get('/lokal', [LokalController::class, 'index'])->name('lokal');
Route::get('/lokal/{slug}', [LokalController::class, 'show'])->name('lokal.show');
Route::get('/nasional', [NasionalController::class, 'index'])->name('nasional');
Route::get('/nasional/{slug}', [NasionalController::class, 'show'])->name('nasional.show');
Route::get('/international', [InternationalController::class, 'index'])->name('international');
Route::get('/international/{slug}', [InternationalController::class, 'show'])->name('international.show');

Route::get('/live', [LiveController::class, 'index'])->name('live');
// Route::get('/live/{slug}', [LiveController::class, 'show'])->name('live.show');

Route::get('/video', [VideoController::class, 'index'])->name('video');
Route::get('/video/{slug}', [VideoController::class, 'show'])->name('video.show');
Route::view('/sejarah', 'binet.sejarah');
Route::view('/visi-misi', 'binet.visi-misi');
Route::get('/{slug}', [ViewController::class, 'index'])->name('view');


// Dashboard
Route::prefix('/admin')
      ->middleware('admin')
      ->group(function() {
        // Admin
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.admin');
        Route::view('/profile', 'dashboard.admin.profile.profil');
        Route::resource('/kategori', KategoriController::class);
        Route::resource('/adminberita', AdminBeritaController::class);
        Route::get('/adminberita/preview/{id}', [AdminBeritaController::class, 'view'])->name('adminberita.preview');
        Route::resource('/adminstatus', AdminStatusBeritaController::class);
        Route::resource('/author', AdminAuthorController::class);
        Route::resource('/adminvidio', AdminVideoController::class);
        Route::resource('/adminlive', AdminliveController::class);
        Route::resource('/iklan', IklanController::class);
      });
      
      Route::prefix('/author')
      ->group(function() {
        Route::get('/dashboard', [AuthorDashboardController::class, 'index'])->name('dashboard.author');
        Route::view('/profile', 'dashboard.author.profile.profil');
        Route::resource('/authorberita', BeritaController::class);
        Route::resource('/authorstatus', StatusController::class);
        Route::resource('/authorvidio', AuthorVidioController::class);
      });
