<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/','/home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::get('/home', function () {   
    return view('home');
});
    
Route::get('/home', [GalleryController::class, 'showHome'])->name('home');
Route::get('/home', [ChefController::class, 'showHome'])->name('home');

// Galleries
Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');
Route::get('/galleries/create', [GalleryController::class, 'create'])->name('galleries.create');
Route::get('/galleries/{id}/edit', [GalleryController::class, 'edit'])->name('galleries.edit');
Route::delete('/galleries/{id}', [GalleryController::class, 'destroy'])->name('galleries.destroy');
Route::post('/galleries', [GalleryController::class, 'store'])->name('galleries.store');
Route::put('/galleries/{id}', [GalleryController::class, 'update'])->name('galleries.update');

// Chefs
Route::get('/chefs', [ChefController::class, 'index'])->name('chefs.index');
Route::get('/chefs/create', [ChefController::class, 'create'])->name('chefs.create');
Route::post('/chefs', [ChefController::class, 'store'])->name('chefs.store');
Route::get('/chefs/{chef}', [ChefController::class, 'show'])->name('chefs.show');
Route::get('/chefs/{chef}/edit', [ChefController::class, 'edit'])->name('chefs.edit');
Route::put('/chefs/{chef}', [ChefController::class, 'update'])->name('chefs.update');
Route::delete('/chefs/{chef}', [ChefController::class, 'destroy'])->name('chefs.destroy');

// Menus
Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
Route::get('/menus/create', [MenuController::class, 'create'])->name('menus.create');
Route::post('/menus', [MenuController::class, 'store'])->name('menus.store');
Route::get('/menus/{id}', [MenuController::class, 'show'])->name('menus.show');
Route::get('/menus/{id}/edit', [MenuController::class, 'edit'])->name('menus.edit');
Route::put('/menus/{id}', [MenuController::class, 'update'])->name('menus.update');
Route::delete('/menus/{id}', [MenuController::class, 'destroy'])->name('menus.destroy');

// Reservasi
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::post('/reservations/store', [ReservationController::class, 'store'])->name('reservations.store');
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

//
Route::get('/users', [UserController::class, 'showUsers'])->name('users.index');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');