<?php

namespace App\Http\Controllers\front\destination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        return view('front.destination.destination');
    }
}
