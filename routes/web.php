<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TodosContoller;
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

Route::get('/tareas',[TodosContoller::class,'index'])->name('todos');

Route::post('/tareas',[TodosContoller::class,'store'])->name('todos');

Route::get('/tareas/{id}',[TodosContoller::class,'show'])->name('todos-edit');
Route::patch('/tareas/{id}',[TodosContoller::class,'update'])->name('todos-update');

Route::delete('/tareas/{id}',[TodosContoller::class,'destroy'])->name('todos-destroy');

Route::resource('categories',CategoriesController::class);