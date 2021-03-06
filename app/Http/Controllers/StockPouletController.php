<?php

namespace App\Http\Controllers;

use App\Models\Stock_poulet;
use App\Models\Poulailler;
use Illuminate\Http\Request;

class StockPouletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stock_poulets=Stock_poulet::all();
        $poulailler= Poulailler::all();
        return view('stock-poules.liste-stock',compact('stock_poulets','poulailler'));
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
        $stock=Stock_poulet::create([
            'id'=>$request->id,
            'nombre_bStock'=>$request->nombre_bStock,
            'solde'=>$request->prix,
            'date_sortie'=>$request->date,
            'poulailler_id'=>$request->poulailler_id,
        ]);
        return redirect()->route('Stock_poulet.index')->withSuccess(__('Enregistrer avec succes.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock_poulet  $stock_poulet
     * @return \Illuminate\Http\Response
     */
    public function show(Stock_poulet $stock_poulet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock_poulet  $stock_poulet
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock_poulet $stock_poulet,$id)
    {
        $stock_poulet = Stock_poulet::join('poulaillers','stock_poulets.poulailler_id','=','poulaillers.id');
        $stock_poulet=Stock_poulet::find($id);
        $poulailler = Poulailler::all();
        return view('stock-poules.modifier-stock',compact('stock_poulet','poulailler'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock_poulet  $stock_poulet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock_poulet $stock_poulet,$id)
    {
        $stock=Stock_poulet::find($id);
        $stock->nombre_bStock=$request->nombre_bStock;
        $stock->solde=$request->prix;
        $stock->date_sortie=$request->date;
        $stock->poulailler_id=$request->poulailler_id;
        $stock->save();
        return redirect()->route('Stock_poulet.index')->withSuccess(__('Enregistrer avec succes.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock_poulet  $stock_poulet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock_poulet $stock_poulet,$id)
    {

        $del=Stock_poulet::find($id);
        $del->delete();
        return redirect()->route('Stock_poulet.index')->with('success', 'Supprimer avec succ??ss');
    }
}
