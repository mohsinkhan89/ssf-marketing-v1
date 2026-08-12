<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function aboutUs()
    {
        return view('frontend.about-us');
    }
    public function seo()
    {
        return view('frontend.seo');
    }
    public function ppc()
    {
        return view('frontend.ppc');
    }
    public function emailMarketing()
    {
        return view('frontend.email-marketing');
    }
    public function socialMedia()
    {
        return view('frontend.social-media');
    }
    public function contactUs()
    {
        return view('frontend.contact-us');
    }
    public function dashboard()
    {
        return view('frontend.dashboard');
    }
}
