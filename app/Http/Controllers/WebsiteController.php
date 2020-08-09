<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name','ASC')->where('is_published','1')->get();
        $posts = Post::orderBy('id','DESC')->where('post_type','post')->where('is_published','1')->paginate(6);
        return view('frontend.homepage', compact('categories','posts'));
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

}
