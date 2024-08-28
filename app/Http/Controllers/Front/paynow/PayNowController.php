<?php

namespace App\Http\Controllers\front\paynow;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayNowController extends Controller
{
    public function index()
    {
        return view('front.paynow.paynow');
    }
}
