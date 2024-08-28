<?php

namespace App\Http\Controllers\front\cancel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CancellationPolicyController extends Controller
{
    public function index()
    {
        return view('front.cancle.Cancellationpolicy');
    }
}