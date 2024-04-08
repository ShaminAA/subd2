<?php

use App\Http\Controllers\departmentcontroller;
use App\Http\Controllers\logincontroller;
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

Route::get('/workers',[workercontroller::class,'index']);
Route::get('/worker/{id}',[workercontroller::class,'show']);


Route::get('/posts',[postcontroller::class,'index']);
Route::post('/posts/store',[postcontroller::class,'store']);
Route::get('/posts/create',[postcontroller::class,'create'])->middleware('auth');
Route::get('/posts/edit/{id}',[postcontroller::class,'edit'])->middleware('auth');
Route::post('/posts/update/{id}',[postcontroller::class,'update'])->middleware('auth');
Route::get('/posts/destroy/{id}',[postcontroller::class,'destroy'])->middleware('auth');

Route::get('/login',[logincontroller::class,'login'])->name('login');
Route::get('/logout',[logincontroller::class,'logout']);
Route::post('/auth',[logincontroller::class,'authenticate']);

Route::get('/error', function () {
    return view('error',['message'=>session('message')]);
});



