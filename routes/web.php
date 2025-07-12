<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {

//    $jobs = Job::with('employer')->paginate(4);
//    $jobs = Job::with('employer')->simplePaginate(3);
//    $jobs = Job::with('employer')->cursorPaginate(3);
    $jobs = Job::with('employer')->simplePaginate(3);


    return view('jobs', ['jobs' => $jobs]);
});


Route::get('/jobs/{id}', function ($id) {


    $job =  Job::find($id);


    return view('job', compact('job'));
});

Route::get('/contact', function () {
    return view('contact');
});
