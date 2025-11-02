<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    /**
     * home page view 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.home.index');
    }
    
    /**
     * Show the Features page.
     *
     * @return \Illuminate\View\View
     */
    public function features()
    {
        return view('pages.features.index');
    }

    /**
     * Show the Pricing page.
     *
     * @return \Illuminate\View\View
     */
    public function pricing()
    {
        return view('pages.pricing');
    }

    /**
     * Show the Docs page.
     *
     * @return \Illuminate\View\View
     */
    public function docs()
    {
        return view('pages.docs');
    }
}