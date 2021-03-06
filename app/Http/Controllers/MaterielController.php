<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use App\Models\Poulailler;
use Illuminate\Http\Request;

class MaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiel=Materiel::all();
        $poulailler= Poulailler::all();
        return view('materiels.liste-materiel',compact('materiel','poulailler')); // lister tout les materiels
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materiel=Materiel::all();
        $poulailler= Poulailler::all();
        return view('materiels.liste-materiel',compact('materiel','poulailler')); // lister tout les materiels
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materiel=Materiel::create([
            'id'=>$request->id,
            'nom'=>$request->nom,
            'prix'=>$request->prix,
            'poulailler_id'=>$request->poulailler_id,
        ]);
        return redirect()->route('Materiel.index')->withSuccess(__('Enregistrer avec succes.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function show(Materiel $materiel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function edit(Materiel $materiel, $id)
    {
        $materiel = Materiel::join('poulaillers','poulaillers.id','=','materiels.poulailler_id')->get();
        $materiel = Materiel::find($id);
        $poulailler = Poulailler::all();
        return view('materiels.modifier-materiel',compact('materiel','poulailler'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $materiel=Materiel::find($id);
        $materiel->nom=$request->nom;
        $materiel->prix=$request->prix;
        $materiel->poulailler_id=$request->poulailler_id;
        $materiel->save();
        return redirect()->route('Materiel.index')->with('success', 'mise ?? jour avec succ??ss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $del=Materiel::find($id);
        $del->delete();
        return redirect()->route('Materiel.index')->with('success', 'Supprimer avec succ??ss');
    }
}
