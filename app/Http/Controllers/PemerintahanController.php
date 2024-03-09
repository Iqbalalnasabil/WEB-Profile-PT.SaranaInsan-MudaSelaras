<?php

namespace App\Http\Controllers;

use App\Models\Pemerintahan;
use Illuminate\Http\Request;

class PemerintahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemerintahans = Pemerintahan::all(); 
        return view('pemerintahan.index', compact('pemerintahans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemerintahan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image', 
        ]);

        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        pemerintahan::create($input);
        return redirect('/pemerintahan')->with('message', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemerintahan  $pemerintahan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemerintahan $pemerintahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemerintahan  $pemerintahan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemerintahan $pemerintahan)
    {
    
        return view('pemerintahan.edit', compact('pemerintahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemerintahan  $pemerintahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemerintahan $pemerintahan)
    {
        $request->validate([
            'image' => 'image', 
        ]);

        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }else{
            unset($input['image']);
        }

        $pemerintahan->update($input);
        return redirect('/pemerintahan')->with('message', 'Data Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemerintahan  $pemerintahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemerintahan $pemerintahan)
    {
        $pemerintahan->delete();

        return redirect('/pemerintahan')->with('message', 'Data Berhasil dihapus');
    }
}
