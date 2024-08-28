<?php

namespace App\Http\Controllers\front\term;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermConditionController extends Controller
{
    public function index()
    {
        return view('front.terms.termcondition');
    }
}
