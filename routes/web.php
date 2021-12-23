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
    $pyro = DB::table('pyros')->get();

    return view('tiga', ['pyro' => $pyro]);
}); 
use App\Http\Controllers\PyroController;
Route::resource('pyro', PyroController::class);

Route::post('/CreatePyro', 'PyroController@storePyros');
Route::get('/getContacts', 'PyroController@getAllPyroInfo');

Route::get('/getAll', 'PyroController@showPyro');



?>