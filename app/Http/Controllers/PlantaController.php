<?php

namespace App\Http\Controllers;

use App\Models\Planta;
use Illuminate\Http\Request;

class PlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function __invoke()
    {
        // ...
    }
    public function index()
    {
        return view('');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planta-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
    Planta::create([
        'nomedaplanta' => $request->input ('nomedaplanta'),
        'descricao' => $request->input ('descricao'), 
        'local' => $request->input ('local'),
        'datadoplantio' => $request->input ('datadoplantio'),
        'user_id' => auth()->user()->id
    ]);


        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function show(Planta $planta)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planta = Planta::where('id', $id)->first();
        return view('planta-edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planta $planta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Planta::where('id',$id)->delete();
      return back();
    }
}

