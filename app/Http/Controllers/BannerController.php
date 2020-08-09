<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id','DESC')->get();
        return view ('admin.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.banner.create');
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
            'image' => 'required',
            
        ],
        [
            'image.required' => 'Pilih image',
            
        ]);
        $banner = new Banner();
        $banner->user_id = Auth::id();
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('storage/galleries',$filename);
            $banner->image=$filename;
        }else{
            return $request;
            $banner->image='';
        }
        $banner->save();

        Session::flash('message','Berhasil ditambahkan');
        return redirect ()->route('banners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $this->validate($request,[
            'image' => 'required',
            
        ],
        [
            'image.required' => 'Pilih image',
            
        ]);

        $banner->user_id = Auth::id();
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('storage/galleries',$filename);
            $banner->image=$filename;
        }else{
            return $request;
            $banner->image='';
        }
        $banner->save();

        Session::flash('message','Berhasil ditambahkan');
        return redirect ()->route('banners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        Storage::delete('storage/galleries'. $banner->image_url);
        $banner->delete();

        Session::flash('delete-message','Berhasil dihapus');
        return redirect ()->route('banners.index');
    }
}
