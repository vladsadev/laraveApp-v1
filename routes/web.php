<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

//job index
Route::get('/jobs', function () {


    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', ['jobs' => $jobs]);
});

//jobs create
Route::get('/jobs/create', function () {

    return view('jobs.create');
});

//Store
Route::post('/jobs', function () {
    // validate
    request()->validate([
        'title' => ['min:3', 'required'],
        'salary' => ['required']
    ]);

    //authorize (on hold)

    // make it persistence
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

//Job show
Route::get('/jobs/{id}', function ($id) {

    $job = Job::findOrFail($id);

    return view('jobs.show', compact('job'));
});

//Edit
Route::get('/jobs/{id}/edit', function ($id) {

    $job = Job::findOrFail($id);

    return view('jobs.edit', compact('job'));
});

//Update
Route::patch('/jobs/{id}', function ($id) {
    //validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    //authorize (On hold...)

    //update the job and persist
    $job = Job::findOrFail($id);
    /* 1. way
    $job->title = request('title');
    $job->salary= request('salary');
    $job->save(); */

    //Second way
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    // Redirect to the job listing or job show
//    return redirect('/jobs');
    return redirect('/jobs/'.$job->id);
});

//Destroy
Route::delete('/jobs/{id}', function ($id) {
    //Authorize (On hold)

    //Delete de Job
   $job = Job::findOrFail($id);
   $job->delete();

    //Redirect
    return redirect('/jobs');

});



Route::get('/contact', function () {
    return view('contact');
});
