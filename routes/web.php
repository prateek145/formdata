<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\WebsiteController;
use App\Http\Controllers\backend\FormdataController;

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

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    // backend ROutes
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', [HomeController::class, 'index'])->name('backend.home');
    Route::resource('website', WebsiteController::class);
    Route::resource('formdata', FormdataController::class);

});

Route::get('api/fetchformdata', [Homecontroller::class, 'fetchformdata'])->name('fetchformdata');