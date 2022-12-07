<?php

use App\Http\Controllers\TodoListController;
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

Route::get('/', [TodoListController::class, 'index'])->name('index');
Route::get('/create', [TodoListController::class, 'create'])->name('create');
Route::post('/store',[TodoListController::class, 'store'])->name('store');
Route::get('/edit/{id}', [TodoListController::class, 'edit'])->name('edit');
Route::post('/update/id={id}', [TodoListController::class, 'update'])->name('update');
Route::post('/delete/id={id}', [TodoListController::class, 'destroy'])->name('delete');