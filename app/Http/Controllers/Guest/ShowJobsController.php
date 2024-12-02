<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\JobListing;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShowJobsController extends Controller
{
    public function index(Request $request)
    {

        // dd('passed');
        $title = $request->input('title');
        $category = $request->input('category');
        $region = $request->input('region');

        $paginateBy = $request->input('paginateSelector', 15);


        $initialJobs = JobListing::latest();

        if ($title) {
            $initialJobs->where('job_title', 'like', '%' . $title . '%')
                ->orWhere('job_desc', 'like', '%' . $title . '%');
        }


        if ($category) {
            $initialJobs->where('category', 'like', '%' . $category . '%');
        }

        if ($region) {
            $initialJobs->where('region', 'like', '%' . $region . '%');
        }

        $jobs = $initialJobs->paginate($paginateBy)->withQueryString();




        return Inertia::render('Guest/Job/Show', [
            'jobs' => $jobs,

            'titleSearched' => $request->input('title'),
            'categorySelected' => $request->input('category'),
            'regionSelected' => $request->input('region'),
            'paginateBy' => $request->input('paginateSelector')
        ]);
    }

    public function showJob(JobListing $job)
    {

        return Inertia::render('Guest/Job/Individual', [
            'job' => $job
        ]);
    }
}
