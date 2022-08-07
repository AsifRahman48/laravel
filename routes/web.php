<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TodoController;

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
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

require __DIR__.'/auth.php';
Route::group(['middleware'=>'auth'],function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/form', function () {
        return view('form');
    });
    Route::get('/test',[TestController::class,'testing'])->name('test');
    Route::get('/about',[TestController::class,'about'])->name('about');
    Route::post('/NameSubmit',[TestController::class,'form'])->name('form');
    Route::get('/header',[TestController::class,'header'])->name('header');
    Route::get('/todo_show',[TodoController::class,'show'])->name('todo.show');
    Route::get('/todo_delete/{id}',[TodoController::class,'destroy'])->name('todo.delete');
    Route::get('/todo_create',[TodoController::class,'create'])->name('todo.create');
    Route::post('/todo_store',[TodoController::class,'store'])->name('todo.store');
    Route::get('/todo_edit/{id}',[TodoController::class,'edit'])->name('todo.edit');
    Route::post('/todo_update/{id}',[TodoController::class,'update'])->name('todo.update');
});
//require __DIR__.'/auth.php';
//Route::get('/test',[TestController::class,'testing']);
Route::get('home_home',function (){
    return view('frontend.template_parts.home');
});
////
//Route::get('/todo_show',[TodoController::class,'show'])->name('todo.show');
//Route::get('/todo_delete/{id}',[TodoController::class,'destroy'])->name('todo.delete');
//Route::get('/todo_create',[TodoController::class,'create'])->name('todo.create');
//Route::post('/todo_store',[TodoController::class,'store'])->name('todo.store');
//Route::get('/todo_edit/{id}',[TodoController::class,'edit'])->name('todo.edit');
//Route::post('/todo_update/{id}',[TodoController::class,'update'])->name('todo.update');
