<?php

namespace App\Http\Controllers;

use App\Choice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $choices = Choice::orderBy('id','ASC')->paginate(5);
        return view ('admin.choice.index',compact('choices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.choice.create');
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
            'name' =>'required|unique:choices',
            'nama' =>'required|unique:choices',
        ]);

            $choice = new Choice();
            $choice->name = $request->name;
            $choice->nama = $request->nama;
            $choice->user_id = Auth::id();
            $choice->save();
        
        Session::flash('message','Berhasil ditambahkan');
        return redirect ()->route('choices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function show(Choice $choice)
    {
        return view('admin.choice.show', ['choice'=>Choice::find($choice)]);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function edit(Choice $choice)
    {
        return view('admin.choice.edit',compact('choice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Choice $choice)
    {
        $this->validate($request, [
            'name' =>'required|unique:choices,name,' .$choice->id,
        ],
            [
                'name.required' =>'Enter name',
                'name.unique' => 'Nama telah ada',
            ]);

        $choice->name = $request->name;
        $choice->user_id = Auth::id();
        $choice->save();
        
        Session::flash('message','Berhasil diubah');
        return redirect ()->route('choices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Choice $choice)
    {

        $choice->delete();

        Session::flash('delete-message','Berhasil dihapus');
        return redirect()->back();
    }
}
