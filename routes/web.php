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

Route::get('jissyuu3_1', 'Jissyuu3_1Controllerr@index');
Route::post('jissyuu3_1', 'Jissyuu3_1Controller@post');

Route::get('jissyu3_3', 'Jissyu3_1Controller@index');

use App\Http\Middleware\HelloMiddleware;
Route::get('hello', 'HelloController@index')
   ->middleware(HelloMiddleware::class);