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

//jissyu6_1
Route::get('jissyu13', 'Jissyu6_1Controller@index');
Route::post('jissyu13/find', 'Jissyu6_1Controller@find');

//jissyu6_3
Route::get('jissyu14', 'Jissyu6_3Controller@index');
Route::post('jissyu14/find', 'Jissyu6_3Controller@find');
Route::get('jissyu14/show', 'Jissyu6_3Controller@show');
Route::get('jissyu14/add', 'Jissyu6_3Controller@add');
Route::post('jissyu14/create', 'Jissyu6_3Controller@create');
Route::get('jissyu14/edit', 'Jissyu6_3Controller@edit');
Route::post('jissyu14/update', 'Jissyu6_3Controller@update');
Route::get('jissyu14/del', 'Jissyu6_3Controller@del');
Route::post('jissyu14/remove', 'Jissyu6_3Controller@remove');

//jissyu6_4
Route::get('jissyu15', 'Jissyu6_4Controller@index');
Route::get('jissyu15/add', 'Jissyu6_4Controller@add');
Route::post('jissyu15/create', 'Jissyu6_4Controller@create');

//jissyu6_5
Route::get('jissyu16', 'Jissyu6_5Controller@index');
Route::get('jissyu16//show', 'Jissyu6_5Controller@show');





   