<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Basic;
use App\Models\Listing;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{

    public function candidateDashboard()
    {

        $listing =  Listing::all()->count();

        return Inertia::render('Candidate/Dashboard', [
            'listing' => $listing,
        ]);
    }



    public function index(Request $request)
    {


        return Inertia::render('Candidate/Profile', [
            'user' => $request->user(),
            'dob' => $request->user()->dob
        ]);
    }

    public function storeBasicInfo(Request $request)
    {
        $validated = $request->validate(
            [
                'full_name' => 'required|string|max:255',
                'email' => ['required', 'email', 'lowercase', 'max:255', Rule::unique(User::class)->ignore($request->user()->id)],
                'phone' => 'required|digits:3|max:255',
                'dob' => 'required|date|before_or_equal:' . Carbon::now()->subYears(18)->toDateString(),
            ],
            [
                'dob.before_or_equal' => 'You must be above 18 Years'
            ],
        );

        $request->user()->fill($validated);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }



        $request->user()->save();


        return redirect()->route('candidate.profile')->with('message', 'Basic Details Updated Successfully!');
    }

    public function storeAdditionalInfo(Request $request)
    {
        $validated = $request->validate(
            [
                'language' => 'required|string|max:255',
                'region' => ['required', 'string', 'max:255'],
                'address' => 'required|string|max:255',
                'education' => 'required|string|max:255',
                'job_title' => 'required|string|max:255',
                'field_of_study' => 'required|string|max:255',
            ]
        );



        $request->user()->fill($validated);


        $request->user()->save();


        return redirect()->route('candidate.profile')->with('message', 'Additional Details Added Successfully!');
    }
}
