<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BannerController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'],function(){
    Route::get('/',[AdminController::class, 'admin'])->name('admin');
    //banners
    Route::resource('banner',BannerController::class);
});
Route::group(['prefix' => 'manager'],function(){
    Route::get('/',[AdminController::class, 'admin'])->name('manager');
});
