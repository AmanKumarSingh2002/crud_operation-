<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\AgeCheck;
Route::get('/', function () {
    return view('welcome');
});
Route::view('/form','form');
Route::controller(StudentController::class)->group(function(){
    Route::get('/getStudents','getStudent');
    Route::post('/addStudents','addStudent');
    Route::get('/delete/{id}','delete');
    Route::get('/edit/{id}','edit');
    Route::put('/update/{id}','update');
    Route::get('/search','search');
    Route::post('/multiDelete','multiDelete');
});
Route::view('/home','home')->middleware(AgeCheck::class);
Route::view('/check','check');