<?php

namespace App\Http\Controllers;

use App\Models\job;
use App\Models\apply;
use App\Models\favorite;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class JobController extends Controller
{
    public function create()
    {
        return view('jobs.create');
    }

    public function addJob(Request $request)
    {
        $this->validate($request, [
            'jobdesc' => 'required',
            'title' => 'required|string|max:30',
            'company' => 'required|string|max:30',
            'desc_company' => 'nullable',
            'area' => 'required|string|max:30',
            'type' => 'required',
            'location' => 'required',
            'position' => 'required|string|max:20',
            'desc_job' => 'nullable',
            'salary' => 'nullable',
            'gender' => 'required',
            'age' => 'nullable',
            'study' => 'required',
            'experience' => 'nullable|string|max:25',
            'workday_start' => 'required',
            'workday_end' => 'required',
            'workhour_start' => 'required',
            'workhour_end' => 'required',
        ]);

        $jobs = new job();
        $jobs->jobdesc_id = $request->jobdesc;
        $jobs->title = $request->title;
        $jobs->company = $request->company;
        $jobs->desc_company = $request->desc_company;

        $jobs->area = $request->area;
        $jobs->type = $request->type;
        $jobs->location = $request->location;
        $jobs->position = $request->position;
        $jobs->desc_job = $request->desc_job;
        $jobs->salary = $request->salary;

        $jobs->gender = $request->gender;
        $jobs->age = $request->age;
        $jobs->study_id = $request->study;
        $jobs->experience = $request->experience;

        $jobs->workday_start = $request->workday_start;
        $jobs->workday_end = $request->workday_end;
        $jobs->workhour_start = $request->workhour_start;
        $jobs->workhour_end = $request->workhour_end;

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
        $jobs = Job::with('jobdesc');

        if ($jobdesc_id) {
            $jobs = $jobs->where('jobdesc_id', $jobdesc_id);
        }

        $jobs = $jobs->get();
        $jobdescTitle = $jobdesc_id ? ($jobs->isEmpty() ? null : $jobs->first()->jobdesc->title) : null;

        foreach ($jobs as $job) {
            $job->relativeDate = Carbon::parse($job->updated_at)->diffForHumans();
            $job->formattedSalary = number_format($job->salary, 0, ',', '.');
        }

        return view('jobs.sortjob', compact('jobs', 'jobdescTitle'));
    }

    public function sortAllJob()
    {
        return $this->sortJob();
    }
    public function jobDetail()
    {
        $jobs = Job::with('study')->get();

        return view('jobs.job-detail', compact('jobs'));
    }
    public function index()
    {
        $jobs = Job::with('study')->get();

        foreach ($jobs as $job) {
            $job->relativeDate = Carbon::parse($job->updated_at)->diffForHumans();
            $job->formattedSalary = number_format($job->salary, 0, ',', '.');
        }

        return view('welcome', compact('jobs'));
    }

    public function detailId($job_id)
    {
        $job = Job::with('study')->findOrFail($job_id);

        $job->relativeDate = Carbon::parse($job->updated_at)->diffForHumans();

        $job->formattedSalary = number_format($job->salary, 2, ',', '.');

        return view('jobs.detail', compact('job'));
    }
    public function detailContent(){
        $job = Job::where('job_id')->get();

        return view('jobs.detail', compact('job'));
    }
    public function applyJob(Request $request)
    {
        $userId = Auth::id();
        $user = User::find($userId);

        if (!$user) {
            // Penanganan jika pengguna tidak ditemukan
            return redirect()->route('login')->with('error', 'User not found.');
        }

        $this->validate($request, [
            'user_id',
            'job_id'
        ]);

        $apply = new Apply();
        $apply->user_id = $request->input('user_id');
        $apply->job_id = $request->input('job_id');

        if ($apply->save()) {
            return redirect()->route('jobs.index')->with('success', 'Application submitted successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to submit application.');
        }
        return view('welcome', compact('jobs'));
    }

    public function favoritejob(Request $request)
    {
        $userId = Auth::id();
        $user = User::find($userId);

        if (!$user) {
            // Penanganan jika pengguna tidak ditemukan
            return redirect()->route('login')->with('error', 'User not found.');
        }

        $this->validate($request, [
            'user_id',
            'job_id'
        ]);

        $favorite = new Favorite();
        $favorite->user_id = $request->input('user_id');
        $favorite->job_id = $request->input('job_id');

        if ($favorite->save()) {
            return redirect()->route('jobs.index')->with('success', 'Add to favorite job!');
        } else {
            return redirect()->back()->with('error', 'Failed to add to favorite job.');
        }
        return view('welcome', compact('jobs'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        // Query untuk mencari pekerjaan berdasarkan judul atau deskripsi pekerjaan
        $jobs = Job::where('title', 'LIKE', "%$keyword%")
                    ->orWhere('desc_job', 'LIKE', "%$keyword%")
                    ->get();

        // Mengirimkan data hasil pencarian ke view
        return view('jobs.search', compact('jobs', 'keyword'));
    }

}
