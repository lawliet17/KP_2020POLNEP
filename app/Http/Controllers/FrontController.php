<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Gallery;
use App\Choice;
use App\Banner;
use App\CategoryPost;
use Harimayco\Menu\Models\Menus;
use Harimayco\Menu\Models\MenuItems;
use Menu;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name','ASC')->get();
        $posts = Post::orderBy('id','DESC')->where('post_type','post')->paginate(3);
        $banners = Banner::orderBy('id','ASC')->get();
        $public_menu = Menu::getByName('default-menu');
        return view('frontend.homepage', compact('categories','posts','banners','public_menu'));
    }

    public function profile()
    {
        $public_menu = Menu::getByName('default-menu');
        return view('frontend.profil', compact('public_menu'));
    }

    public function news()
    {
        $categories = Category::orderBy('name','ASC')->get();
        $posts = Post::orderBy('id','DESC')->where('post_type','post')->paginate(2);
        $jumlah_post = CategoryPost::where('category_id',1)->count();
        $public_menu = Menu::getByName('default-menu');
        return view('frontend.berita', compact('categories','posts','public_menu','jumlah_post'));
    }

    public function post($slug)
    {
        $post = Post::where('id_slug', $slug)
        ->orWhere('en_slug', $slug)
        ->where('post_type','post')->first();

        $public_menu = Menu::getByName('default-menu');
        if($post)
        {
            return view('frontend.post',compact('post','public_menu'));
        } else
        {
            return \Response::view('website.errors.404', array(), 404);
        }
    }

    public function category($id)
    {
        $category = Category::where('id', $id)->first();
        $public_menu = Menu::getByName('default-menu');
        if($category)
        {
            $posts= $category->posts()->orderBy('posts.id','DESC')->paginate(5);
            return view('frontend.kategori',compact('category','posts','public_menu'));
        } else
        {
            return \Response::view('website.errors.404', array(), 404);
        }
    }

    public function gallery()
    {
        $choices = Choice::orderBy('name','ASC')->get();
        $galleries = Gallery::get()->first();
        $public_menu = Menu::getByName('default-menu');
        return view ('frontend.galeri',compact('galleries','choices','public_menu'));
    }

    public function showGallery($name)
    {
        $choice = Choice::where('name', $name)->first();
        $public_menu = Menu::getByName('default-menu');
        if($choice)
        {
            $galleries= $choice->galleries()->orderBy('galleries.id','DESC')->paginate(5);
            return view('frontend.galeri-detail',compact('choice','galleries','public_menu'));
        } else
        {
            return \Response::view('website.errors.404', array(), 404);
        }
    }
}

