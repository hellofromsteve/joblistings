<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Str;

class ListingController extends Controller
{
    public function showGuestAllListing(Request $request)
    {

        // dd('passed');
        $title = $request->input('title');
        $category = $request->input('category');
        $region = $request->input('region');

        $paginateBy = $request->input('paginateSelector', 15);


        $initialQuery = Listing::latest();

        if ($title) {
            $initialQuery->where('title', 'like', '%' . $title . '%')
                ->orWhere('job_desc', 'like', '%' . $title . '%');
        }


        if ($category) {
            $initialQuery->where('category', 'like', '%' . $category . '%');
        }

        if ($region) {
            $initialQuery->where('region', 'like', '%' . $region . '%');
        }

        $listings = $initialQuery->paginate($paginateBy)->withQueryString();




        return Inertia::render('Guest/Job/Show', [
            'listings' => $listings,

            'titleSearched' => $request->input('title'),
            'categorySelected' => $request->input('category'),
            'regionSelected' => $request->input('region'),
            'paginateBy' => $request->input('paginateSelector')
        ]);
    }

    public function showGuestListing(Listing $listing)
    {

        return Inertia::render('Guest/Job/Individual', [
            'listing' => $listing
        ]);
    }

    public function showAllEmployerListing(Request $request)
    {

        $user = Auth::user();

        $search = $request->input('search');


        $listingQuery = Listing::latest()->where('user_id', $user->id);

        if ($search) {
            $listingQuery->where('title', 'like', '%' . $search . '%');
        }


        $listings = $listingQuery->paginate(15)->withQueryString();


        $listingCount = Listing::where('user_id', $user->id)->count();

        return Inertia::render('Employer/Job/Index-Job', [
            'listinggsCount' => $listingCount,
            'listings' => $listings,
            'searchTerm' => $request->search,
        ]);
    }

    public function showEmployerListingForm()
    {

        return Inertia::render('Employer/Job/Create-Job', []);
    }

    public function storeEmployerListing(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|string|max:35',
            'gender' => 'required|string|in:Male,Female,Either|max:255',
            'category' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'region' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'qualification' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $fields['slug'] = Str::random(24);



        // dd($fields);

        $request->user()->listing()->create($fields);

        return redirect()->route('employer.job-listings.index');
    }


    public function showOneEmployerListing(Listing $listing)
    {
        return Inertia::render('Employer/Job/Show-Job', [
            'listing' => $listing,
        ]);
    }


    public function showEditEmployerListing(Listing $listing)
    {
        return Inertia::render('Employer/Job/Show-Job', [
            'listing' => $listing,
        ]);
    }

    public function updateOneEmployerListing(Listing $listing)
    {
        return Inertia::render('Employer/Job/Show-Job', [
            'listing' => $listing,
        ]);
    }

    public function destroyOneEmployerListing(Listing $listing)
    {
        return Inertia::render('Employer/Job/Show-Job', [
            'listing' => $listing,
        ]);
    }
}
