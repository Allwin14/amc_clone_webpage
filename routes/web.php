<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterSucessfullController;
use App\Http\Controllers\ApplicationController;

Route::get('/', function () {
    return view('welcome');
});
route::get('/home',[TemplateController::class,'index']);

route::get('/reg',[RegisterController::class,'reg']);

route::get('/regsucess',[RegisterSucessfullController::class,'regsucess']);
Route::get('/regsucess', [RegisterController::class, 'reg'])->name('regsuccess');


Route::get('/regsucess', [ApplicationController::class, 'store']);
