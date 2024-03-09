<?php

namespace App\Http\Controllers;

use App\Models\Telco;
use Illuminate\Http\Request;

class TelcoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telcos = Telco::all(); 
        return view('telco.index', compact('telcos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('telco.create');
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

        telco::create($input);
        return redirect('/telco')->with('message', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Telco  $telco
     * @return \Illuminate\Http\Response
     */
    public function show(Telco $telco)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Telco  $telco
     * @return \Illuminate\Http\Response
     */
    public function edit(Telco $telco)
    {
    
        return view('telco.edit', compact('telco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Telco  $telco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Telco $telco)
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

        $telco->update($input);
        return redirect('/telco')->with('message', 'Data Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Telco  $telco
     * @return \Illuminate\Http\Response
     */
    public function destroy(Telco $telco)
    {
        $telco->delete();

        return redirect('/telco')->with('message', 'Data Berhasil dihapus');
    }
}
