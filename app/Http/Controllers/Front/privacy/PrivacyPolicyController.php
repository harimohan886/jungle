<?php

namespace App\Http\Controllers\front\privacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        return view('front.privacy.privacypolicy');
    }
}
