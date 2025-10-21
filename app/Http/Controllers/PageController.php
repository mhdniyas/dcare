<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display the about page.
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * Display the contact page.
     */
    public function contact(): View
    {
        return view('pages.contact');
    }

    /**
     * Display the help page.
     */
    public function help(): View
    {
        return view('pages.help');
    }

    /**
     * Display the track order page.
     */
    public function trackOrder(): View
    {
        return view('pages.track-order');
    }

    /**
     * Display the quote page.
     */
    public function quote(): View
    {
        return view('pages.quote');
    }

    /**
     * Display the marketplace page.
     */
    public function marketplace(): View
    {
        return view('pages.marketplace');
    }
}