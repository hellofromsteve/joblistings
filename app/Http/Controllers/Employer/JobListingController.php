<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Str;

class JobListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $user = Auth::user();

        $search = $request->input('search');


        $jobsQuery = JobListing::latest()->where('user_id', $user->id);

        if ($search) {
            $jobsQuery->where('job_title', 'like', '%' . $search . '%');
        }


        $jobs = $jobsQuery->paginate(15)->withQueryString();


        $jobCount = JobListing::where('user_id', $user->id)->count();

        return Inertia::render('Employer/Job/Index-Job', [
            'jobCount' => $jobCount,
            'jobs' => $jobs,
            'searchTerm' => $request->search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return Inertia::render('Employer/Job/Create-Job', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'job_title' => 'required|string|max:35',
            'gender' => 'required|string|in:Male,Female,Either|max:255',
            'category' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'region' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'qualification' => 'required|string|max:255',
            'job_desc' => 'required|string',
        ]);

        $fields['slug'] = Str::random(24);



        // dd($fields);

        $request->user()->jobListings()->create($fields);

        return redirect()->route('employer.job-listings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
