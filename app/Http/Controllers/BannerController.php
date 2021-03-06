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

    public function show(Banner $banner) {
        return view('admin.banner.edit')->with('banner', $banner);
    }

    public function edit() {
        return view('admin.banner.update');
    }

    public function update(BannerRequest $request, Banner $banner) {
        $banner->update($request->validated());
        return redirect()->route('banner.index');
    }

    public function destroy(Banner $banner) {
        $banner->delete();
        return redirect()->back();
    }
}
