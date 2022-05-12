<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\RequestController;
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



Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->middleware(['auth'])->name('home');
Route::get('/logout',[\App\Http\Controllers\HomeController::class,'logout']);

/* ------------------------------- SKILLS ------------------------------- */
Route::get('/skill/create',[SkillController::class,'index']);
Route::post('/skill/create',[SkillController::class,'store']);
Route::get('/skill/list',[SkillController::class,'list']);
Route::get('/skill/delete/{idSkill}',[SkillController::class, 'delete']);

/* ------------------------------- REQUEST ------------------------------- */
Route::get('/request/create',[RequestController::class,'index']);
Route::post('/request/create',[RequestController::class,'store']);

Route::get('/request/edit/{id}',[RequestController::class,'edit']);
Route::post('/request/update/{id}',[RequestController::class,'update']);

Route::get('/request/list',[RequestController::class,'list']);


Auth::routes();

