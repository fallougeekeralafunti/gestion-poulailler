<?php

namespace App\Http\Controllers;

use App\Models\Gerant;
use App\Models\Poulailler;
use App\Models\Materiel;
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
    /** */
    // public function dash()
    // {
    //     $materiel=Materiel::all();
    //     $poulailler= Poulailler::all();
    //     return view('gerant.dashboard',compact('materiel','poulailler')); // lister tout les materiels
    // }
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
        return redirect()->route('Gerant.index')->withSuccess(__('Enregistrer avec succes.'));
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
    public function edit(Request $request, $id)
    {
        $gerant = Gerant::find($id);
        return view('gerant.modifier-gerant',compact('gerant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gerant  $gerant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         Gerant::where('id','=',$id)->update([
            'id'=>$id,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'cni' => $request->cni,

        ]);
        return redirect()->route('Gerant.index')->with('success', 'mise à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gerant  $gerant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doss = Gerant::find($id);
        //ddd($doss);
        $doss->delete();
        return redirect()->route('Gerant.index')->with('success', 'Supprimer avec succèss');
    }
}
