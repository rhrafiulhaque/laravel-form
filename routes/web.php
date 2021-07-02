<?php


use App\Http\Controllers\FormController;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
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

Route::get('/', [MainController::class,'main']);
Route::get('/features', [MainController::class,'features']);
Route::get('/contract', [MainController::class,'contract']); 
Route::get('/form', [FormController::class,'Diplayform'])->name("form.create");
Route::post('/save', [FormController::class,'SaveFrom'])->name("form.save");


