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

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/clear', function() {//önbellek temizleme
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('optimize:clear');
});

Route::get('/','App\Http\Controllers\HomeController@index');

//Admin
Route::get('/admin','App\Http\Controllers\AdminController@index')->name('admin')->middleware('auth');
Route::get('/admin/login','App\Http\Controllers\AdminController@login')->name('admin_login');
Route::post('/admin/logincheck','App\Http\Controllers\AdminController@logincheck')->name('admin_logincheck');
Route::get('/admin/logout','App\Http\Controllers\AdminController@logout')->name('admin_logout');

Route::get('/admin/service','App\Http\Controllers\AdminServiceController@service')->name('admin_service');
Route::get('/admin/service/create','App\Http\Controllers\AdminServiceController@create')->name('admin_servicecreate');
Route::post('/admin/service/add','App\Http\Controllers\AdminServiceController@add')->name('admin_serviceadd');
Route::get('/admin/service/delete/{id}','App\Http\Controllers\AdminServiceController@delete')->name('admin_servicedelete');

?>

