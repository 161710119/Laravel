<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipe;
use App\Merk;
class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipes = Tipe::all();
        return view('tipe.index',compact('tipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipe.create');
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
            'nama' => 'required|unique:tipes|max:255',
            'merk_id' => 'required|min:2'
        ]);

        $tipes = new Tipe;
        $tipes->nama = $request->nama;
        $tipes->merk_id = $request->merk_id;
        $tipes->save();
        return redirect()->route('tipes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipes = Tipe::findOrFail($id);
        return view('tipe.show',compact('tipes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipes = Tipe::findOrFail($id);
        return view('tipe.edit',compact('tipes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required|max:255',
            'merk_id' => 'required|min:6'
        ]);

        $tipes = Tipe::findOrFail($id);
        $tipes->nama = $request->nama;
        $tipes->merk_id = $request->merk_id;
        $tipes->save();
        return redirect()->route('tipes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipes = Tipe::findOrFail($id);
        $tipes->delete();
        return redirect()->route('tipes.index'); 
    }
}
