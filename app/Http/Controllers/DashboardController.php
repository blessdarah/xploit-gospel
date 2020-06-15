<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Event;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function list_posts() {
        return view('account.posts')->with('posts', Post::all());
    }

    public function list_events() {
        return view('account.events')->with('events', Event::all());
    }

    /* *
     * list all albums in the gallery
     * on user/admin dashboard
     * */
    public function gallery_albums() {
        return view('gallery.albums')->with('');
    }
}
