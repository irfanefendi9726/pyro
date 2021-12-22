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

Route::get('/dua', function() {
    return view ('dua');
}); 


Route::get('/tiga', function() {
    return view ('tiga');
}); 
use App\Http\Controllers\PyroController;
Route::resource('pyro', PyroController::class);




?>