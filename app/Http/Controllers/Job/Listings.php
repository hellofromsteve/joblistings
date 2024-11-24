<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\JobCategories;
use App\Models\JobCategory;
use App\Models\Listing;
use App\Models\Qualification;
use App\Models\Regions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class Listings extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listings = Listing::all();
        return Inertia('Guest/Jobs', [
            'listings' => $listings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->user()->account_type !== 'employer') {
            return redirect()->route('candidate.dashboard')->with('message', 'You Must Be An Employer To Post A Job! Apply At Settings');
        } else {

            $job_categories = JobCategory::all();
            $qualifications = Qualification::all();
            $regions = Regions::all();

            return Inertia('Employer/Jobs/Create', [
                'job_categories' => $job_categories,
                'qualifications' => $qualifications,
                'regions' => $regions,
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        $fields = $request->validate([
            'job_title' => 'required|string|max:255',
            'gender' => 'required|string|in:Male,Female,Both|max:255',
            'job_cat' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'region' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'qualification' => 'required|string|max:255',
            'job_desc' => 'required|string',
        ]);

        dd($fields);

        $request->user()->listings()->create($fields);
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