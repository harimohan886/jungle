<?php

namespace App\Http\Controllers\front\packagedetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageDetailController extends Controller
{
    public function index()
    {
        return view('front.holidaypackages.packagedetail');
    }
}
