<?php

namespace App\Http\Controllers\front\safari;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RanthamboresafariPageController extends Controller
{
    public function index()
    {
        return view('front.safari.ranthamboresafariPage');
    }
}
