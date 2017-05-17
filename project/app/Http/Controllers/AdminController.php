<?php

namespace App\Http\Controllers;

use App\Blogpost;
use App\User;
use App\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function overview()
    {
        $blogposts = Auth::user()->blogposts;

        return view('admin.overview', [
            'blogposts' => $blogposts
        ]);
    }



}
