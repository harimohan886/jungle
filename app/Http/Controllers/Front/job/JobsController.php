<?php

namespace App\Http\Controllers\front\job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        return view('front.job.jobpage');
    }
}