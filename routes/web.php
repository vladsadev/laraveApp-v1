<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::view('/', 'home');

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', [JobController::class, 'index']);
    Route::post('/jobs', [JobController::class, 'store']);
    Route::get('/jobs/create', [JobController::class, 'create']);
    Route::get('/jobs/{job}', [JobController::class, 'show']);
    Route::patch('/jobs/{job}', [JobController::class, 'update']);
    Route::delete('/jobs/{job}', [JobController::class, 'destroy']);
    Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
});


Route::get('/contact', function () {
    return view('contact');
});
