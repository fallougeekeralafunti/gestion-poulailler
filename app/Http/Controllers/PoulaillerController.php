<?php

namespace App\Http\Controllers;

use App\Models\Gerant;
use App\Models\Poulailler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoulaillerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poulailler = Poulailler::join('gerants','gerants.id','=','poulaillers.gerant_id')->get();
        $gerant = Gerant::all();
        /* $poulailler = DB::table('gerants')
                        ->join('poulailler','gerant.id','=','poulailler.gerant_id')
                        ->select('gerants.nom as NomGerant','poulailler.nom as NomPoulailler')
                        ->get();
                    ddd($poulailler); */
        return view('poulaillers.liste-poulailler',compact('poulailler','gerant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* $poulailler = Poulailler::all();
        $gerant = Gerant::all();
        return view('poulaillers.liste-poulailler',compact('poulailler','gerant')); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poulailler= Poulailler::create([
            'id' => $request->id,
            'nom' => $request->nom,
            'lieu' => $request->lieu,
            'gerant_id' => $request->gerant,
        ]);
        return redirect()->back()->withSuccess(__('Devis Enregistrer avec succes.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poulailler  $poulailler
     * @return \Illuminate\Http\Response
     */
    public function show(Poulailler $poulailler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poulailler  $poulailler
     * @return \Illuminate\Http\Response
     */
    public function edit(Poulailler $poulailler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poulailler  $poulailler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poulailler $poulailler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poulailler  $poulailler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poulailler $poulailler)
    {
        //
    }
}
