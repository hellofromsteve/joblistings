<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ApplicationController extends Controller
{


    public function applyListing(Request $request, $listing)
    {


        if (!Auth::check() || (Auth::user() && !$request->user()->isCandidate())) {

            return back()->with(
                [
                    'message' => 'You Must Be A Candidate Account Holder To Apply',
                    'type' => 'error'
                ]

            );
        }

        if (Applications::where('user_id', $request->user()->id)->where('listing_id', $listing)->exists()) {
            return back()->with(
                [
                    'message' => 'You Have Already Applied To This Job',
                    'type' => 'unique',
                ]
            );
        }



        // Save the application
        $fields =  Applications::create([
            'user_id' => auth()->id(),
            'listing_id' => $listing,
        ]);

        // dd($listing);



        // Return success response for Inertia.js
        return back()->with([
            'message' => 'Your application has been successfully submitted!',
            'type' => 'success'
        ]);
    }
}
