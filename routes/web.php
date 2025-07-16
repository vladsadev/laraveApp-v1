<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::view('/', 'home');

Route::resource('jobs', JobController::class);

Route::get('/contact', function () {
    return view('contact');
});


//Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

/*
 * Un nombre para el controlador del Login, podría ser "LoginController".
 * Sin embargo, podemos usar el nombre de "SessionController" que es
 * bastante usado para este propósito
 */
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
