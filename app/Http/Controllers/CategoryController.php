<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
Use Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','ASC')->get();
        
        return view ('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>'required|unique:categories',
            'nama' =>'required|unique:categories',
        ]);

            $category = new Category();
            $category->name = $request->name;
            $category->nama = $request->nama;
            $category->user_id = Auth::id();
            $category->save();
                    
        return redirect ()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.category.show', ['category'=>Category::find($category)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' =>'required|unique:categories,name,' .$category->id,
            'nama' =>'required|unique:categories,nama,' .$category->id,
        ],
            [
                'name.required' =>'Enter name',
                'name.unique' => 'Nama telah ada',
                'nama.required' =>'Enter name',
                'nama.unique' => 'Nama telah ada',
            ]);

        $category->name = $request->name;
        $category->nama = $request->nama;
        $category->user_id = Auth::id();
        $category->save();
        
        Session::flash('message','Berhasil diubah');
        return redirect ()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        Session::flash('delete-message','Berhasil dihapus');
        return redirect ()->route('categories.index');
    }
}
