<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\SingleController;

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
    return view('welcome'); // view()は引数のテンプレートをレンダリングして返す関数 → 第一引数のパスで表示される
});

// Route::get('hello', function () {
//     return view('hello');
// });

Route::get('hello', [HelloController::class, 'index']);
Route::post('hello', [HelloController::class, 'post']);
Route::get('hello/req', [HelloController::class, 'req']);
Route::get('hello/with_args/{msg?}', [HelloController::class, 'with_args']);

Route::get('single', SingleController::class);


Route::get('fake_login/{email}/{pwd}', function ($email, $pwd) {
    return view('fake_login', ['email' => $email, 'pwd' => $pwd]);
});
