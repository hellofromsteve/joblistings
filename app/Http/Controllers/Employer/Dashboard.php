<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\JobCategories;
use App\Models\JobListing;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Dashboard extends Controller
{
    public function index()
    {


        $jobs = JobListing::where('user_id', auth()->id())->count();


        return Inertia::render('Employer/Dashboard', [

            'jobs' => $jobs
        ]);
    }
}
