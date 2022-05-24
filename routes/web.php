<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/produits', function () {
    return view('produits.liste-produit');
});
Route::get('/stocksPoulets', function () {
    return view('stock-poules.liste-stock');
});
Route::get('/materiels', function () {
    return view('materiels.liste-materiel');
});
Route::get('/poulaillers', function () {
    return view('poulaillers.liste-poulailler');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
