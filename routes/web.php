<?php

use App\Http\Controllers\departmentcontroller;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\workercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/h', function () {
    return view('hello', ['title'=> 'Hello world!']);
});
Route::get('/department',[departmentcontroller::class,'index']);
Route::get('/department/{id}',[departmentcontroller::class,'show']);
Route::get('/post',[postcontroller::class,'index']);
Route::get('/worker/{id}',[workercontroller::class,'show']);
