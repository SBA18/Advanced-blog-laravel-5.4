<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function contactUs()
    {
    	return view('pages.contact-us');
    }

    public function aboutMe()
    {
    	return view('pages.about-me');
    }
}
