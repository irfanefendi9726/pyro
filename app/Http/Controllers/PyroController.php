<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepyroRequest;
use App\Http\Requests\UpdatepyroRequest;
use App\Models\pyro;

class PyroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pyro = pyro::all();
        return view('tiga', compact('pyro'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pyro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepyroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepyroRequest $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'age' => 'required',
            'kerja'=> 'required',
        ]);

        $pyro = new pyro;
        $pyro->nama = $request->nama;
        $pyro->age = $request->age;
        $pyro->kerja= $request->kerja;
        $pyro->save(); 
        return redirect('/pyros');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pyro  $pyro
     * @return \Illuminate\Http\Response
     */
    public function show(pyro $pyro)
    {
        return view('pyro.show', [
            'pyro'=> $pyro
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pyro  $pyro
     * @return \Illuminate\Http\Response
     */
    public function edit(pyro $pyro)
    {
        return view('pyro.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepyroRequest  $request
     * @param  \App\Models\pyro  $pyro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepyroRequest $request, pyro $pyro)
    {
        $pyro->nama = $request->nama;
        $pyro->age = $request->age;
        $pyro->kerja=$request->kerja;

        $pyro->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pyro  $pyro
     * @return \Illuminate\Http\Response
     */
    public function destroy(pyro $pyro)
    {
        //
    }

    /** Get the age associated with the user. */
    public function pyroresult()
    {
        return $pyro=pyro::where('id',1)
               ->orderBy('nama')
               ->get('age');  
    }

    
    }