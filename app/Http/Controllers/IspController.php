<?php

namespace App\Http\Controllers;

use App\Models\Isp;
use Illuminate\Http\Request;

class IspController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $isps = Isp::all(); 
        return view('isp.index', compact('isps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('isp.create');
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

        isp::create($input);
        return redirect('/isp')->with('message', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Isp  $isp
     * @return \Illuminate\Http\Response
     */
    public function show(Isp $isp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Isp  $isp
     * @return \Illuminate\Http\Response
     */
    public function edit(Isp $isp)
    {
    
        return view('isp.edit', compact('isp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Isp  $isp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Isp $isp)
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

        $isp->update($input);
        return redirect('/isp')->with('message', 'Data Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Isp  $isp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Isp $isp)
    {
        $isp->delete();

        return redirect('/isp')->with('message', 'Data Berhasil dihapus');
    }
}
