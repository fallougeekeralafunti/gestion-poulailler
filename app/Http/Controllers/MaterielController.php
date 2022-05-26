<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
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
        $materiel=Materiel::create([
            'id'=>$request->id,
            'nom'=>$request->nom,
            'prix'=>$request->prix,
            'poulailler_id'=>$request->poulailler_id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function show(Materiel $materiel)
    {
        $mat=Materiel::all();
        return view('materiels.liste-materiel',compact('mat')); // lister tout les materiels
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function edit(Materiel $materiel,$id)
    {
        $matos=Materiel::find($id);
        return view('materiel.modifier-materiel',compact('matos'));
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
        Materiel::where('id','=',$id)->update([
            'id'=>$request->id,
            'nom'=>$request->nom,
            'prix'=>$request->prix,
            'poulailler_id'=>$request->poulailler_id,
        ]);
        return redirect()->route('Materiel.index')->with('success');
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
        return redirect()->route('Materiel.index')->with('success');
    }
}
