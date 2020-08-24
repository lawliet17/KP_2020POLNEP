<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Gallery;
use App\Choice;
use App\Banner;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::count();
        $categories = Category::count();
        $galleries = Gallery::count();
        $choices = Choice::count();
        $banners = Banner::count();
        return view('admin.index', compact('posts','categories','galleries','choices','banners'));
    }

    public function menu()
    {
        return view ('admin.menu.menu');
    }
}
