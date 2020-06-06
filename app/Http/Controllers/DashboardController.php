<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class DashboardController extends Controller
{
    public function list_posts() {
        return view('account.posts')->with('posts', Post::all());
    }
}
