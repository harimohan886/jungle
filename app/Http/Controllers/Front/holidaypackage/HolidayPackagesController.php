<?php

namespace App\Http\Controllers\front\holidaypackage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HolidayPackagesController extends Controller
{
    public function index()
    {
        return view('front.holidaypackages.package');
    }
}
