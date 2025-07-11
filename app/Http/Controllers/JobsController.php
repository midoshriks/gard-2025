<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Http\Requests\StoreJobsRequest;
use App\Http\Requests\UpdateJobsRequest;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Jobs::all();

        $title = 'Delete row ' . '!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('dasboard.pages.Jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobsRequest $request)
    {
        $job = new Jobs();
        $job->name = $request->name;
        $job->save();

        return redirect()->route('dashboard.jobs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jobs $jobs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jobs $jobs, $id)
    {
        $job = Jobs::find($id);
        return view('dasboard.pages.Jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobsRequest $request, Jobs $jobs, $id)
    {
        $job = Jobs::find($id);
        $job->name = $request->name;
        $job->update();

        return redirect()->route('dashboard.jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jobs $jobs, $id)
    {
        $job = Jobs::find($id)->delete();
        return redirect()->route('dashboard.jobs.index');
    }
}
