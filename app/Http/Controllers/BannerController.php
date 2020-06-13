<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Http\Requests\BannerRequest;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index() {
        return view('admin.banner.index')->with('banners', Banner::all());
    }

    public function create() {
        return view('admin.banner.create');
    }

    public function store(BannerRequest $request) {
        Banner::create($request->validated());
        return redirect()->back();
    }

    public function edit() {
        return view('admin.banner.update');
    }

    public function update(Banner $banner) {
        
    }

    public function delete(Banner $banner) {
        $banner->delete();
        return redirect()->back();
    }
}
