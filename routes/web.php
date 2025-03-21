<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CrudsController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::controller(CrudController::class)->group( function(){
    Route::get('crudget',  'index')->name('crud_get');
    Route::get('crudcreate','create')->name('crud_create');
    Route::post('crudstore','store')->name('crud_store');
    Route::get('crudedit/{id}', 'edit')->name('crud_edit');
    Route::post('crudupdate/{id}', 'update')->name('crud_update');
    Route::get('cruddelete/{id}','destroy')->name('crud_delete');
    Route::get('cancel','cancel')->name('cancel');
});


//Route::get('/cruds',[CrudsController::class,'mensaje'])->name('cruds');