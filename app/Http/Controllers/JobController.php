<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function store()
    {
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
    }

    public function create()
    {
        return view('jobs.create');
    }

   public function show(Job $job)
   {
       return view('jobs.show',compact('job'));
   }

   public function update(Job $job)
   {
       //validate
       request()->validate([
           'title' => ['required', 'min:3'],
           'salary' => ['required']
       ]);

       //authorize (On hold...)
       //Second way
       $job->update([
           'title' => request('title'),
           'salary' => request('salary')
       ]);

       // Redirect to the job listing or job show
//    return redirect('/jobs');
       return redirect('/jobs/' . $job->id);
   }

   public function destroy(Job $job)
   {
       //Authorize (On hold)

       //Delete de Job
       $job->delete();

       //Redirect
       return redirect('/jobs');

   }

    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }



}
