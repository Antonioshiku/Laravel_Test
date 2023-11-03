<?php

use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->group(function () {

    Route::controller(UserController::class)->group(function () {

        Route::get('/', 'index')->name('user-list');

        Route::get('create', 'create')->name('user-create');

        Route::post('/', 'store')->name('user-store');
        Route::get('edit/{id}','edit')->name('user-edit');

        Route::get('update/{id}','update')->name('user-update');
        Route::get('/delete/{id}','destroy')->name('user-delete');
        Route::get('/destroy/{id}','delete')->name('user-destroy');
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');