<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function dash()
     {
         $materiel=Materiel::all();
         $poulailler= Poulailler::all();
         return view('dashboard',compact('materiel','poulailler')); // lister tout les materiels
     }
}
