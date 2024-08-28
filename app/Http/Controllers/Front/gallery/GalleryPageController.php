<?php

namespace App\Http\Controllers\Front\gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryPageController extends Controller
{
    public function index()
    {
        return view('front.gallery.gallerypage');
    }
}
