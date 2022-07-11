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
   //->middleware(HelloMiddleware::class);
   ->middleware('auth');

//実習
Route::get('jissyu2', 'JissyuController@index');
Route::get('jissyu3', 'Jissyu3_1Controller@index');
Route::post('jissyu3', 'Jissyu3_1Controller@post');
Route::get('jissyu4', 'Jissyu3_2Controller@index');
Route::post('jissyu4', 'Jissyu3_2Controller@post');

//効果測定
Route::get('kouka1_1', 'Kouka1_1Controller@index');
Route::get('kouka1_2', 'Kouka1_2Controller@index');
Route::post('kouka1_2', 'Kouka1_2Controller@post');

//DB::insertレコード作成
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

//updateによる更新
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

//データの削除
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

//指定したIDのレコードを得る
Route::get('hello/show', 'HelloController@show');

//パーソン
Route::get('person', 'PersonController@index');

//パーソンによるID検索
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

//モデルの作成
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

//モデルの更新
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

//モデルの削除
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');

//Boardテーブルの作成
Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

//RESTS
Route::resource('rest', 'RestappController');
Route::get('hello/rest', 'HelloController@rest');

//セッション
Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');

//ログイン認証
Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
