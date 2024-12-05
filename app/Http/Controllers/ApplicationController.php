<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ApplicationController extends Controller
{


    public function applyListing(Request $request, $listing)
    {

        if (!auth()->check()) {

            return redirect()->route('login')->with(
                [
                    'message' => 'YOU MUST CREATE AN ACCOUNT TO BE ABLE TO APPLY',
                    'type' => 'Error!'
                ]

            );
        }

        $request->validate([
            'listing_id' => 'unique',
        ], [
            'listing_id.unique' => 'You have already applied for this listing',
        ]);

        // Save the application
        $fields =  Applications::create([
            'user_id' => auth()->id(),
            'listing_id' => $listing,
        ]);

        // dd($listing);



        // Return success response for Inertia.js
        return back()->with([
            'message' => 'Your application has been successfully submitted!',
            'type' => 'Success!'
        ]);
    }
}
