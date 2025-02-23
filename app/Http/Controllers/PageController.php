<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutUs() {
        return view('pages.about_us');
    }

    public function faqs() {
        return view('pages.faqs');
    }

    public function tipsTrends() {
        return view('pages.tips_trend');
    }

    public function privacyPolicy() {
        return view('pages.privacy_policy');
    }



   

   
}
