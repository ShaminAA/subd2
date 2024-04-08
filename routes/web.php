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

Route::get('/worker/{id}',[workercontroller::class,'show']);

Route::get('/post',[postcontroller::class,'index']);
Route::get('/posts',[postcontroller::class,'index']);
Route::get('/posts/store',[postcontroller::class,'store']);
Route::get('/posts/create',[postcontroller::class,'create']);
Route::get('/posts/edit/{id}',[postcontroller::class,'edit']);
Route::post('/posts/update/{id}',[postcontroller::class,'update']);
Route::get('/posts/destroy/{id}',[postcontroller::class,'destroy']);

