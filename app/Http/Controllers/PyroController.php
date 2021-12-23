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
        $pyros = pyro::all();
        return view('pyro.index',[
            'pyros'=> $pyros
        ]);   
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

        $pyro = new Pyro;
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

    /** Get the user by using their job */
    public function kerja()
    {
    return $count=pyro::where('active',1)->count();
    }

    public function storePyros(Request $request){
        // validation goes here
        $pyro = pyro::create($request->all());
        return $pyro;
        }
        public function getAllPyroInfo(){
        $pyros = pyro::all();
        }
    
    
}