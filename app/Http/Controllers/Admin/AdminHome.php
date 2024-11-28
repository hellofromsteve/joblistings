<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobCategories;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminHome extends Controller
{
    public function index()
    {

        $categories = JobCategories::count();
        $users = User::count();
        $jobs = Listing::count();
        return Inertia::render('Admin/Dashboard', [
            'categories' => $categories,
            'users' => $users,
            'jobs' => $jobs
        ]);
    }

    public function admindashboard()
    {

        dd('Test');
    }

    public function categories()
    {
        $cats = JobCategories::latest()->get();
        return Inertia::render('Admin/Categories', [
            'cats' => $cats
        ]);
    }


    public function addCategories(Request $request)
    {
        $fields = $request->validate([
            'cat_name' => 'required|string|max:45'
        ], [
            'cat_name.required' => 'The Category Name Field Is Required',
            'cat_name.string' => 'The Category Name Field Must Be Only Letters',
            'cat_name.max' => 'The Category Name Field Must Not Exceed 45 Characters',
        ]);

        JobCategories::create($fields);

        redirect()->route('admin.categories');
    }
}