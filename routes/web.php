<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChapaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/emploiyeurs',function(){
        return view('emploiyeur.index');
    })->name('emploiyeur.index');


    Route::get('/pay',function(){
        return view('paiement.create');
    })->name('paiement.create');

    Route::get('/pay/list',function(){
        return view('paiement.index');
    })->name('paiement.index');
    
    
Route::post('pay/initialize', [ChapaController::class,'initialize'])->name('pay');
Route::get('callback/{reference}', [ChapaController::class,'callback'])->name('callback');

});

require __DIR__.'/auth.php';
