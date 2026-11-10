<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function about(): View
    {
        return view('about-us');
    }

    public function services(): View
    {
        return view('services');
    }

    public function contact(): View
    {
        return view('contact-us');
    }

}