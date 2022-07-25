<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
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
//   return view('welcome');
// });

// 舊版不支援快取 也不符合MVC架構
Route::get('/bus', function () {
  return view('game');
});

// 巴哈姆特網站
Route::get('/game', 'App\Http\Controllers\SiteController@gamer')->name('user');

// Route::get('/hello', function () {
//   return 'welcome';
// })->scopeBindings();

// Route::get傳送方式('/hello路徑', 'App\Http\Controllers\SiteController(Controllers路徑)@hello(functionName or ControllersName路徑 )');
Route::get('/home', 'App\Http\Controllers\SiteController@home')->name('user');

// 第二種寫法 看得懂就好
// Route::get('/hello', [SiteController::class, 'hello']);

// {id?} 謹慎使用
// Route::get('/showUser/{id?}', 'App\Http\Controllers\SiteController@showUser')->name('user');

// prefix (把路徑簡化) user(網址前最)
// 透過建立群組可快速為群組內的所有路由加入相同屬性，比如下面例子中就會裡頭的兩個路由規則加入路徑前綴 demo
Route::prefix('user')->namespace('App\Http\Controllers')->group(function () {
  Route::get('{id?}', 'SiteController@showUser');
});

// Middleware (第三方插件)
// 中介層，符合條件的請求在處理前會先執行的內容
// Route::middleware(['auth'])->namespace('App\Http\Controllers')->group(function () {
//   Route::get('yes', 'SiteController@hello')->name('user');
// });

// Route::get('/showUser/{id}', 'App\Http\Controllers\SiteController@showUser2')->name('user');

// Route::get('/add/{x}/{y}', 'App\Http\Controllers\SiteController@add')->name('user');

// Controller 七種方法集中管理
// Route::resource('post', PostController::class);
// Controller api七種方法集中管理(這樣寫要使用 class右鍵 import)
Route::apiresource('post', PostController::class);
// Route::resource('users', UserController::class);
// Route::resource('users', 'App\Http\Controllers\UserController');

Route::get('/users/edit', 'App\Http\Controllers\SiteController@edit')->name('users.edit');
Route::get('/users/show', 'App\Http\Controllers\SiteController@show')->name('users.show');
Route::get('/users/index', 'App\Http\Controllers\SiteController@index');
Route::get('/users/index1', 'App\Http\Controllers\SiteController@index1');
Route::get('/users/index2', 'App\Http\Controllers\SiteController@index2');
