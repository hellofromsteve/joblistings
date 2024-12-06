<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class EmployerController extends Controller
{
    public function dashboard(Request $request)
    {



        $user = Auth::user();

        $listings = Listing::where('user_id', $user->id)->count();

        $applicants = Applications::whereIn('listing_id', function ($query) {
            $query->select('id')
                ->from('listings')
                ->where('user_id', auth()->id());
        })->count();


        return Inertia::render('Employer/Dashboard', [

            'listings' => $listings,
            'applicants' => $applicants,
        ]);
    }
}
