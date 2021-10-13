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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/list-user', function () { return view('feature.list_user');})-> name('list_user');
// Route::get('/add_user', function () { return view('feature.list_user');})-> name('list_user');

Route::get('/them-user','App\Http\Controllers\FeatureController@add_user')->name('add_user');
Route::get('/danh-sach-user','App\Http\Controllers\FeatureController@all_user')->name('all_user');
Route::post('/save-user','App\Http\Controllers\FeatureController@save_user');
Route::get('/cap-nhat-user/{user_id}','App\Http\Controllers\FeatureController@edit_user')->name('edit_user');
Route::post('/update-user/{user_id}','App\Http\Controllers\FeatureController@update_user')->name('update_user');
Route::get('/xoa-user/{user_id}','App\Http\Controllers\FeatureController@delete_user')->name('delete_user');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
