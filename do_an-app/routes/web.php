<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get(
    '/login',
    'App\Http\Controllers\UserController@createNewAccount'
);
Route::post('/save-register', [
    'as' => 'savecreatenewaccount',
    'uses' => 'App\Http\Controllers\UserController@store'
]);
Route::get('/', 'App\Http\Controllers\SanPhamController@index');
// Route::get('/', 'App\Http\Controllers\SanPhamController@mau_ao_moi');
//     return view('trang_chu');
// });
Route::get('/index', 'App\Http\Controllers\SanPhamController@index');
// Route::get('/index', 'App\Http\Controllers\SanPhamController@mau_ao_moi');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/product', function () {
    return view('production');
});
Route::get('/product-nike', 'App\Http\Controllers\SP_NikeController@index');
Route::get('/product-jordan', 'App\Http\Controllers\SP_JordanController@index');


Route::get('/register', function () {
    return view('register_acc');
});



Route::get('/add-gio-hang/{id_sp}', "App\Http\Controllers\SanPhamController@add_gio_hang");


Route::get('/update-gio-hang/{id_sp}', "App\Http\Controllers\SanPhamController@update_gio_hang");

Route::get('/xoa-item-gio-hang/{id_sp}', "App\Http\Controllers\SanPhamController@xoa_item_gio_hang");

Route::get('/xoa-gio-hang', "App\Http\Controllers\SanPhamController@xoa_gio_hang");

Route::get('/gio-hang', "App\Http\Controllers\NormalPageController@gio_hang");

Route::get('/thanh-toan', "App\Http\Controllers\NormalPageController@thanh_toan");

Route::post('/thanh-toan', [
    "as" => "save_thanh_toan",
    "uses" => "App\Http\Controllers\NormalPageController@thanh_toan_store"
]);

Route::get('/single', "App\Http\Controllers\SanPhamController@san_pham_moi");

