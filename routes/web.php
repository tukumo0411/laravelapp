<?php

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

//Route::get('hello',function () {
//    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
// });

use App\Http\Middleware\HelloMiddleware;
Route::get('hello', 'HelloController@index')
   ->middleware(HelloMiddleware::class);

Route::get('jissyu2', 'JissyuController@index');
Route::get('jissyu3', 'Jissyu3_1Controller@index');
Route::post('jissyu3', 'Jissyu3_1Controller@post');
Route::get('jissyu4', 'Jissyu3_2Controller@index');
Route::post('jissyu4', 'Jissyu3_2Controller@post');

Route::get('kouka1_1', 'Kouka1_1Controller@index');

Route::get('kouka1_2', 'Kouka1_2Controller@index');
Route::post('kouka1_2', 'Kouka1_2Controller@post');

Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');



