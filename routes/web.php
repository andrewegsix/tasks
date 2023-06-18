<?php

use App\Http\Controllers\TodoController;
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
    return view('main');
});
//Route::get('/', function () {
//    return view('welcome');
//});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Главная страница со слайдером
Route::get('/main', [App\Http\Controllers\HomeController::class, 'main'])->name('main');
//Страница "Мои дела"
Route::get('/index', [App\Http\Controllers\TodoController::class, 'index'])->name('index');
//Страница о нас
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
////////Список дел/задач
//Создать задачу
Route::get('/create', [App\Http\Controllers\TodoController::class, 'create'])->name('create');
//Хранить созданные задачи
Route::post('/store', [App\Http\Controllers\TodoController::class, 'store'])->name('store');
//Просматривать задачу
Route::get('/show/{id}', [App\Http\Controllers\TodoController::class, 'show'])->name('show');
//Редактировать задачу
Route::get('/{id}/edit', [TodoController::class, 'edit'])->name('edit');
//Обновлять задачу
Route::put('/update', [App\Http\Controllers\TodoController::class, 'update'])->name('update');
//Удалять задачу
Route::delete('/destroy', [App\Http\Controllers\TodoController::class, 'destroy'])->name('destroy');
