<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    $jobs = Job::all();

    return view('jobs', ['jobs' => $jobs]);
});


Route::get('/jobs/{id}', function ($id) {

//    $jobs = Job::all();

//    $job = \Illuminate\Support\Arr::first($jobs, fn($value) => $value['id'] == $id);
    $job =  Job::find($id);


    return view('job', compact('job'));
});

Route::get('/contact', function () {
    return view('contact');
});
