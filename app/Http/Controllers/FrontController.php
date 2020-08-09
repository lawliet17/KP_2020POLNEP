<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Gallery;
use App\Choice;
use App\Banner;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name','ASC')->where('is_published','1')->get();
        $posts = Post::orderBy('id','DESC')->where('post_type','post')->where('is_published','1')->paginate(6);
        $banners = Banner::orderBy('id','ASC')->get();
        return view('frontend.homepage', compact('categories','posts','banners'));
    }

    public function news()
    {
        $categories = Category::orderBy('name','ASC')->where('is_published','1')->get();
        $posts = Post::orderBy('id','DESC')->where('post_type','post')->where('is_published','1')->paginate(6);
        return view('frontend.berita', compact('categories','posts'));
    }

    public function post($id)
    {
        $post = Post::where('id', $id)->where('post_type','post')->where('is_published','1')->first();
        if($post)
        {
            return view('frontend.post',compact('post'));
        } else
        {
            return \Response::view('website.errors.404', array(), 404);
        }
    }

    public function category($id)
    {
        $category = Category::where('id', $id)->where('is_published','1')->first();
        if($category)
        {
            $posts= $category->posts()->orderBy('posts.id','DESC')->where('is_published','1')->paginate(5);
            return view('frontend.kategori',compact('category','posts'));
        } else
        {
            return \Response::view('website.errors.404', array(), 404);
        }
    }

    public function gallery()
    {
        $choices = Choice::orderBy('name','ASC')->get();
        $galleries = Gallery::orderBy('id','DESC')->paginate(6);
        return view ('frontend.galeri',compact('galleries','choices'));
    }

    public function showGallery($id)
    {
        $choice = Choice::where('id', $id)->first();
        if($choice)
        {
            $galleries= $choice->galleries()->orderBy('galleries.id','DESC')->paginate(5);
            return view('frontend.galeri-detail',compact('choice','galleries'));
        } else
        {
            return \Response::view('website.errors.404', array(), 404);
        }
    }
}

