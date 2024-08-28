<?php

namespace App\Http\Controllers\front\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function index()
    {
        return view('front.about.aboutpage');
    }
}
