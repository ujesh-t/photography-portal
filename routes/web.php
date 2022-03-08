<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotographerController;

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
    return view('home-me');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::middleware('auth')->group(function () {

    Route::get('/photos', function(){
        return view('photos');
    })->name('photos');
    
    Route::get('/photographers', function(){
        return view('photographers');
    })->name('photographers');
    
    Route::get('/photographer-register', function(){
        return view('photographer-register');
    })->name('photographer-register');
    
    Route::post('photographer-register',[PhotographerController::class, 'store']);

});


require __DIR__.'/auth.php';
