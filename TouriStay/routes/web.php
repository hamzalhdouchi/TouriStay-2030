<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\propertiesController;

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
Route::get( '/', [propertiesController::class, 'readPropretis'])->name('properties.read');



Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/inscrer', function () {
    return view('auth.register');
})->name('inscrer');



// // Route::get('/dashboard', function () {
// //     return view('dashboard');

// })->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/store',[userController::class,'store'])->name('create_user');
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/dashboard', [AdminController::class, 'read'])->name('user.read');
Route::post('/properties', [propertiesController::class, 'create'])->name('properties.create');
Route::get( '/properties', [propertiesController::class, 'readPropretis'])->name('properties.read');
Route::post( '/modifer/{id}', [propertiesController::class, 'propertiesById'])->name('propertie.modifer');
Route::delete( '/destroy/{id}', [propertiesController::class, 'destroy'])->name('propertie.destroy');
Route::patch('/update/{id}', [propertiesController::class, 'update'])->name('update.properties');
Route::get('/Home', [propertiesController::class, 'readAllProperties'])->name('readAll.properties');
Route::POST('/favore/{id}', [propertiesController::class, 'favoriteCreate'])->name('favore.create');
Route::delete('/favorites/{id}', [propertiesController::class, 'removeFavorite'])->name('favore.remove');
Route::get('/favoris', [propertiesController::class, 'showFavoris'])->name('favoris.index');
Route::get('/search', [propertiesController::class, 'dynamicSearch'])->name('properties.dynamicSearch');


Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');
    Route::delete('/user/{id}', [AdminController::class, 'destroy'])->name('user.destroy');
    Route::put('/status/{id}', [AdminController::class, 'changeStatus'])->name('user.changeStatus');
    Route::get('/profile', [AdminController::class, 'readById'])->name('user.Profile');
    Route::put( '/user/{id}', [UserController::class, 'update'])->name('user.changeProfile');
});


require __DIR__.'/auth.php';
