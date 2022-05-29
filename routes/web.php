<?php

use App\Http\Controllers\GerantController;
use App\Http\Controllers\StockPouletController;
use App\Http\Controllers\PoulaillerController;
use App\Http\Controllers\MaterielController;
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
 */Route::get('/', function () { return view('welcome');});


/* Route::get('/produits', function () {
    return view('produits.liste-produit');
});
Route::get('/stocksPoulets', function () {
    return view('stock-poules.liste-stock');
});
Route::get('/materiels', function () {
    return view('materiels.liste-materiel');
}); */
Route::get('/materiels',[MaterielController::class,"index"])->name('Materiel.index');
Route::post('/materiels',[MaterielController::class,"store"])->name('Materiel.store');
Route::get('/materiels/{id}/edit',[MaterielController::class,"edit"])->name('Materiel.edit');
Route::put('/materiels/{id}',[MaterielController::class,"update"])->name('Materiel.update');
Route::delete('/materiels/{id}',[MaterielController::class,"destroy"])->name('Materiel.destroy');


Route::get('/poulaillers',[PoulaillerController::class,"index"])->name('Poulailler.index');
Route::post('/poulaillers',[PoulaillerController::class,"store"])->name('Poulailler.store');
Route::get('/poulaillers/{id}/edit',[PoulaillerController::class,"edit"])->name('Poulailler.edit');
Route::put('/poulaillers/{id}',[PoulaillerController::class,"update"])->name('Poulailler.update');
Route::delete('/poulaillers/{id}',[PoulaillerController::class,"destroy"])->name('Poulailler.destroy');
//Route::resource('/poulaillers', PoulaillerController::class)->names('Poulaillers');

Route::get('/gerants',[GerantController::class,"index"])->name('Gerant.index');
Route::post('/gerants',[GerantController::class,"store"])->name('Gerant.store');
Route::get('/gerant/{id}/edit',[GerantController::class,"edit"])->name('Gerant.edit');
Route::put('/gerant/{id}',[GerantController::class,"update"])->name('Gerant.update');
Route::delete('/gerant/{id}',[GerantController::class,"destroy"])->name('Gerant.destroy');
//Route::get('/gerant/dashboard',[GerantController::class,"dash"])->name('Gerant.dash');

Route::get('/stocksPoulets',[StockPouletController::class,"index"])->name('Stock_poulet.index');
Route::post('/stocksPoulets',[StockPouletController::class,"store"])->name('Stock_poulet.store');
Route::get('/stocksPoulets/{id}/edit',[StockPouletController::class,"edit"])->name('Stock_poulet.edit');
Route::put('/stocksPoulets/{id}',[StockPouletController::class,"update"])->name('Stock_poulet.update');
Route::delete('/stocksPoulets/{id}',[StockPouletController::class,"destroy"])->name('Stock_poulet.destroy');

Route::get('/produits',[GerantController::class,"index"])->name('Produit.index');
Route::post('/produits',[ProduitController::class,"store"])->name('Produit.store');
Route::get('/produits/{id}/edit',[produitController::class,"edit"])->name('Produit.edit');
Route::put('/produits/{id}',[produitController::class,"update"])->name('Produit.update');
Route::delete('/produits/{id}',[produitController::class,"destroy"])->name('Produit.destroy');

Route::get('dashboard', function () {
    return view('dashboard');
 })->middleware(['auth'])->name('dashboard');
//Route::get('/dashboard',[DashboardController::class,"dash"])->name('dash');


require __DIR__.'/auth.php';
