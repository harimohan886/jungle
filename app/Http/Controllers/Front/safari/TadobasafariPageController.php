<?php

namespace App\Http\Controllers\front\safari;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TadobasafariPageController extends Controller
{
    public function index()
    {
        return view('front.safari.tadobasafariPage');
    }
}
