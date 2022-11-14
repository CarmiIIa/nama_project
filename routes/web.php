<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\TodoController;

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

Route::get('/', [TodoController::class, 'login'])->name('login'); 
Route::get('/register', [TodoController::class, 'register'])->name('register'); 

Route::post('/register', [TodoController::class, 'inputRegister'])->name('register.post'); 
    
Route::post('/login', [TodoController::class, 'auth'])->name('login.auth');
Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');  
