<?php

use App\Http\Controllers\DataController;
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

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', 'DataController@index');
Route::get('/create', 'DataController@create');
Route::get('detail/{id}', 'DataController@detail');
Route::get('edit/{id}', 'DataController@edit');
Route::put('/{id}', 'DataController@update');
Route::post('/', 'DataController@store');
