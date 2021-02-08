<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscripcioController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [InscripcioController::class, 'index']);
Route::get('inscripcio', [InscripcioController::class, 'inscripcio']);
Route::post('inscription', [InscripcioController::class, 'inscription']);
