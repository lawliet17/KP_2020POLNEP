<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Gallery;
use App\Choice;

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
        return view('admin.index', compact('posts','categories','galleries','choices'));
    }

    public function menu()
    {
        return view ('admin.menu.menu');
    }
}
