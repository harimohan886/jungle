<?php

namespace App\Http\Controllers\Front\FooterPage;

use App\Http\Controllers\Controller;
// use App\Models\ChambalPackage;
// use App\Models\ChambalPriceManagement;
// use App\Models\News;
// use App\Models\Package;
// use App\Models\PageManagement;
// use App\Models\Setting;
// use Illuminate\Support\Facades\Log;

class FooterPageManagementController extends Controller
{
    public function index()
    {
        return view('front.home.index');
    }

    // public function safariBooking()
    // {
    //     $jungle = PageManagement::where('type', 'jungle')->first();
    //     return view('frontend.safaribooking.safari-booking', compact('jungle'));
    // }

    // public function chambalSafariBooking()
    // {
    //     $chambalPackageFeatures = ChambalPriceManagement::where('status', true)->pluck('name')->toArray();

    //     $chambalPackages = ChambalPackage::with(['chambalPackageFeatures.chambalPriceManagement' => function ($query) {
    //         $query->select('id', 'name');
    //     }])->where('status', true)->get();

    //     $chambalPackagesTransformed = $chambalPackages->map(function ($package) {
    //         return [
    //             'id' => $package->id,
    //             'name' => $package->name,
    //             'slug' => $package->slug,
    //             'status' => $package->status,
    //             'meta_title' => $package->meta_title,
    //             'meta_description' => $package->meta_description,
    //             'image' => $package->image,
    //             'created_at' => $package->created_at->toISOString(),
    //             'updated_at' => $package->updated_at->toISOString(),
    //             'chambal_package_features' => $package->chambalPackageFeatures->map(function ($feature) {
    //                 return [
    //                     'name' => $feature->chambalPriceManagement->name
    //                 ];
    //             })->toArray()
    //         ];
    //     });

    //     $chambalSafariBooking = PageManagement::where('type', 'devalia')->first();

    //     return view('frontend.chambalsafari.chambal-safaribooking', [
    //         'chambalPackageFeatures' => $chambalPackageFeatures,
    //         'chambalSafariBooking' => $chambalSafariBooking,
    //         'chambalPackages' => $chambalPackagesTransformed
    //     ]);
    // }

    // public function contactUs()
    // {
    //     $contact = PageManagement::where('type', 'contact')->first();
    //     $contactDetails = Setting::where('type', 'contact')->select('value')->first();
    //     return view('frontend.contact.contact', compact('contact', 'contactDetails'));
    // }

    // public function privacyPolicy()
    // {
    //     $privacyPolicy = PageManagement::where('type', 'privacy')->first();
    //     return view('frontend.privacy.privacypolicy', compact('privacyPolicy'));
    // }

    // public function cancellationAndRefundPolicy()
    // {
    //     $cancellationAndRefundPolicy = PageManagement::where('type', 'cancellation')->first();
    //     return view('frontend.cancel.cancellation', compact('cancellationAndRefundPolicy'));
    // }

    // public function termAndConditions()
    // {
    //     $termAndConditions = PageManagement::where('type', 'term')->first();
    //     return view('frontend.terms.termcondtion', compact('termAndConditions'));
    // }

    // public function howToReach()
    // {
    //     $howToReach = PageManagement::where('type', 'reach')->first();
    //     return view('frontend.reach.how-to-reach', compact('howToReach'));
    // }

    // public function aboutUs()
    // {
    //     $aboutUs = PageManagement::where('type', 'about')->first();
    //     return view('frontend.about.aboutus', compact('aboutUs'));
    // }

    // public function nearByAttraction()
    // {
    //     $nearByAttraction = PageManagement::where('type', 'attractions')->first();
    //     return view('frontend.nearattraction.nearbyattraction', compact('nearByAttraction'));
    // }

    // public function newsAndBlogs()
    // {
    //     $newsess = News::where('status', 1)->get();
    //     return view('frontend.news.news', compact('newsess'));
    // }

    // public function frequentlyAskedQuestions()
    // {
    //     $frequentlyAskedQuestions = PageManagement::where('type', 'faq')->first();
    //     return view('frontend.faqpage.faq', compact('frequentlyAskedQuestions'));
    // }

}