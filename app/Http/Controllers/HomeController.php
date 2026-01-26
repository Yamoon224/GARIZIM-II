<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function home(): View
    {
        return view('home');
    }

    public function missions(): View
    {
        return view('missions');
    }

    public function services(): View
    {
        return view('services');
    }

    public function contacts(): View
    {
        return view('contacts');
    }
}
