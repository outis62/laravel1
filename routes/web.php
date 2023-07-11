<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnregistrementController;

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


Route::get('/test/{userName}', [TestController::class, 'method1']);

Route::get('/exemple', [TestController::class, 'exemple']);

Route::get('/accueil', [TestController::class, 'accueil']);

// Route::post('/accueil', [TestController::class, 'store']);
Route::post('/enregistrement', [EnregistrementController::class, 'store']);