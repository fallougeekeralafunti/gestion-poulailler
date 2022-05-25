<?php

namespace App\Http\Controllers;

use App\Models\Gerant;
use Illuminate\Http\Request;

class GerantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $gerant = Gerant::all();
            return view('gerant.liste-gerant',compact('gerant'));

        /*  $Gerant = Gerant::all();
        return view('liste-gerant',compact('Gerant')); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gerant= Gerant::create([
            'id' => $request->id,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'cni' => $request->cni,
        ]);
        return redirect()->route('Gerant.index')->withSuccess(__('Devis Enregistrer avec succes.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gerant  $gerant
     * @return \Illuminate\Http\Response
     */
    public function show(Gerant $gerant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gerant  $gerant
     * @return \Illuminate\Http\Response
     */
    public function edit(Gerant $gerant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gerant  $gerant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gerant $gerant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gerant  $gerant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gerant $gerant)
    {
        //
    }
}
