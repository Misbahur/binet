<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewController;

// Dashboard
// Admin
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\KategoriController;
use App\Http\Controllers\Dashboard\AdminBeritaController;
use App\Http\Controllers\Dashboard\AdminStatusBeritaController;
use App\Http\Controllers\Dashboard\AdminAuthorController;
use App\Http\Controllers\Dashboard\IklanController;
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
Route::get('/view', [ViewController::class, 'index'])->name('view');

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
