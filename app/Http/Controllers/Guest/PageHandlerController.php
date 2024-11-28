<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageHandlerController extends Controller
{
    public function homeVue()
    {
        return Inertia::render('Guest/Home');
    }
}
