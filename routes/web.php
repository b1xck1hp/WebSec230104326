<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/multable/{number?}', function ($number = 8) {
    $j = $number;
    return view('multable', compact("j") );
});
Route::get('/even', function () {
    return view('even');
});
Route::get('/prime', function () {
    return view('prime');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('/posts',[PostController::class, 'index']);


