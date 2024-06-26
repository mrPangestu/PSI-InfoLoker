<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'jobdesc' => 'required|string|max:255',
            'title' => 'required',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'study' => 'required|string|max:10',
            'salary' => 'nullable',
        ]);

        $jobs = new job();
        $jobs->jobdesc_id = $request->jobdesc;
        $jobs->title = $request->title;
        $jobs->company = $request->company;
        $jobs->location = $request->location;
        $jobs->study_id = $request->study;
        $jobs->salary = $request->salary;

        if($jobs->save()) {
            return redirect()->route('jobs.index');
        } else {
            dd("Data gagal Disimpan");
        }
    }
    public function destroy(Job $job){
        $job->delete();

        return redirect()->back()->with('success', 'Pekerjaan berhasil dihapus.');
    }

    public function sortJob($jobdesc_id = null)
    {
        $jobs = Job::where('jobdesc_id', $jobdesc_id)->get();

        return view('jobs.Sortjob', compact('jobs'));
    }
    public function sortAllJob(){
        $jobs = Job::all();

        return view('jobs.Sortjob', compact('jobs'));
    }

}
