<?php

use App\Http\Middleware\EnsureAdminRole;
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
Route::get('/product-nike', 'App\Http\Controllers\NIKEController@index');
Route::get('/product-jordan', 'App\Http\Controllers\SP_JordanController@index');

Route::post('/register', [
    "as" => "saveCreateNewAccount",
    "uses" => "App\Http\Controllers\UserController@store"
]);

Route::get('/register', 'App\Http\Controllers\UserController@createNewAccount');

Route::get('/login', 'App\Http\Controllers\UserController@login');

Route::post('/login', [
    "as" => "loginAccount",
    "uses" => "App\Http\Controllers\UserController@login_Account"
]);
Route::post('/dang-nhap', [
    "as" => "loginAccount",
    "uses" => "App\Http\Controllers\UserController@login_Account"
]);

Route::get('/logout', 'App\Http\Controllers\UserController@logout');

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

Route::get('/product-type', "App\Http\Controllers\SanPhamController@product_type");

Route::get('/action', "App\Http\Controllers\SanPhamController@action")->name('action');

/*ADMIN*/
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->middleware(EnsureAdminRole::class);
Route::get('/admin', 'App\Http\Controllers\AdminController@du_lieu_dashboard');
Route::get('/login-admin', 'App\Http\Controllers\AdminController@login_admin');

Route::post('/dang-nhap-admin', [
    "uses" => "App\Http\Controllers\UserController@login_admin"
]);

Route::get('/admin/ql-san-pham', 'App\Http\Controllers\SPAdminController@index')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-san-pham/edit/{id_sp}', 'App\Http\Controllers\SPAdminController@edit')->middleware(EnsureAdminRole::class);
Route::post('/admin/ql-san-pham/edit/{id_sp}', 'App\Http\Controllers\SPAdminController@update')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-san-pham/delete/{id_sp}', 'App\Http\Controllers\SPAdminController@destroy')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-san-pham/create', 'App\Http\Controllers\SPAdminController@create_sp')->middleware(EnsureAdminRole::class);
Route::post('/admin/ql-san-pham/create', 'App\Http\Controllers\SPAdminController@store')->middleware(EnsureAdminRole::class);

Route::get('/admin/ql-khach-hang', 'App\Http\Controllers\UserAdminController@index')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-khach-hang/edit/{id_user}', 'App\Http\Controllers\UserAdminController@edit')->middleware(EnsureAdminRole::class);
Route::post('/admin/ql-khach-hang/edit/{id_user}', 'App\Http\Controllers\UserAdminController@update')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-khach-hang/delete/{id_user}', 'App\Http\Controllers\UserAdminController@destroy')->middleware(EnsureAdminRole::class);


Route::get('/admin/ql-don-hang', 'App\Http\Controllers\DHangAdminController@index')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-don-hang/pagination/{current_page}', 'App\Http\Controllers\DHangAdminController@pagination');
Route::get('/admin/ql-don-hang/edit/{id_don_hang}', 'App\Http\Controllers\DHangAdminController@edit')->middleware(EnsureAdminRole::class);
Route::post('/admin/ql-don-hang/edit/{id_don_hang}', 'App\Http\Controllers\DHangAdminController@update')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-don-hang/delete/{id_don_hang}', 'App\Http\Controllers\DHangAdminController@destroy')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-don-hang/info/{id_don_hang}', 'App\Http\Controllers\DHangAdminController@chi_tiet_don_hang')->middleware(EnsureAdminRole::class);
