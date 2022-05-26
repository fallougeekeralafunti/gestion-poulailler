<?php

use App\Http\Controllers\GerantController;
use App\Http\Controllers\PoulaillerController;
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
/* Route::resource('contrat','AjouterContratController');
 */Route::get('/', function () {
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
Route::get('/poulaillers',[PoulaillerController::class,"index"])->name('Poulaillerindex');
Route::post('/poulaillers',[PoulaillerController::class,"store"])->name('Poulaillerstore');
// Route::get('/poulaillers', function () {
//     return view('poulaillers.liste-poulailler');
// });
Route::get('/gerants',[GerantController::class,"index"])->name('Gerant.index');
Route::post('/gerants',[GerantController::class,"store"])->name('Gerant.store');
Route::get('/gerant/{id}/edit',[GerantController::class,"edit"])->name('Gerant.edit');
Route::put('/gerant/{id}',[GerantController::class,"update"])->name('Gerant.update');
Route::delete('/gerant/{id}',[GerantController::class,"destroy"])->name('Gerant.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
