<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
        return view('pages.about');
    }

    public function contact() {
        toastr()->success('about page');
        return view('pages.contact');
    }
}
