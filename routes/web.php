<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\ExempleController;
use App\Models\Client;
use App\Models\Entreprise;
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

/* Mes Routes  Non Restfull, Simples */

Route::get('/ind', function(){

	return view('accueil');

})->name('accueil');

Route::get('/', function () {
    return view('auth.login');
});



Route::get('/apropos', function(){

	return view('apropos');

})->name('apropos');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* Routes pour les composants livewire */

Route::get("/counter" , [CounterController::class , 'index']);

Route::get("/exemple", [ExempleController::class, 'index']);



/* Essaye d'ajouter les middlewares pour nos différentes sections */


Route::group(['middleware'=>'auth'], function(){

	/* Mes routes Controller RESTFULL  */
	
Route::resource('/clients', ClientController::class);
Route::resource('/entreprises', EntrepriseController::class);

/*Autres Routes supplémentaires */

Route::get('/search', [ClientController::class, 'search'])->name('searchClients');

Route::get('/searchEntreprise', [EntrepriseController::class, 'search'])->name('searchEntreprises');



});


