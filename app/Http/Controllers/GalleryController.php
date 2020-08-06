<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('id','DESC')->get();
        return view ('admin.gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image_url' => 'required',
            'name' => 'required',
        ],
        [
            'image_url.required' => 'Pilih image',
            'name' => 'Input name',
        ]);
        $gallery = new Gallery();
        $gallery->user_id = Auth::id();
        $gallery->name = $request->name;

        if ($request->hasFile('image_url')) {
            $file=$request->file('image_url');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('storage/galleries',$filename);
            $gallery->image_url=$filename;
        }else{
            return $request;
            $gallery->image_url='';
        }
        $gallery->save();  

        Session::flash('message','Berhasil ditambahkan');
        return redirect ()->route('galleries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $galleries = Gallery::orderBy('id','DESC')->get();
        return view('admin.gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $this->validate($request,[
            'image_url' => 'required',
        ],
        [
            'image_url.required' => 'Pilih image',
        ]);

        $gallery->user_id = Auth::id();
        $gallery->name = $request->name;
        if ($request->hasFile('image_url')) {
            $file=$request->file('image_url');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('storage/galleries',$filename);
            $gallery->image_url=$filename;
        }else{
            return $request;
            $gallery->image_url='';
        }
        $gallery->save();

        Session::flash('message','Berhasil ditambahkan');
        return redirect ()->route('galleries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        Storage::delete('public/galleries'. $gallery->image_url);
        $gallery->delete();

        Session::flash('delete-message','Berhasil dihapus');
        return redirect ()->route('galleries.index');
    }
}
