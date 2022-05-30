<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Poulailler;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produit=Produit::all();
        $poulailler= Poulailler::all();
        return view('produits.liste-produit',compact('produit','poulailler')); // lister tout les produits
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
        $produit= Produit::create([
           'id'=>$request->id,
            'nom'=>$request->nom,
            'prix'=>$request->prix,
            'quantite'=>$request->quantite,
            'type'=>$request->type,
            'poulailler_id'=>$request->poulailler_id,
        ]);
        return redirect()->route('Produit.index')->withSuccess(__('Enregistrer avec succes.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit,$id)
    {
        $produit = Produit::join('poulaillers','poulaillers.id','=','produits.poulailler_id');
        $produit = Produit::find($id);
        $poulailler = Poulailler::all();
        return view('produits.modifier-produit',compact('produit','poulailler'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit,$id)
    {
        $produit = Produit::find($id);
        $produit->nom = $request->nom;
        $produit->prix = $request->prix;
        $produit->quantite = $request->quantite;
        $produit->type = $request->type;
        $produit->poulailler_id = $request->poulailler_id;
        $produit->save();
        return redirect()->route('Produit.index')->withSuccess(__('Modifier avec succes.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit,$id)
    {
        $produit = Produit::find($id);
        $produit->delete();
        return redirect()->route('Produit.index')->withSuccess(__('Supprimer avec succes.'));
    }

}
