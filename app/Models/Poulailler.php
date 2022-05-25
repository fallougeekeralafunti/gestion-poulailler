<?php

namespace App\Models;

use App\Models\Gerant;
use App\Models\Produit;
use App\Models\Materiel;
use App\Models\Stock_poulet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poulailler extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function gerant(){
        return $this->belongsTo(Gerant::class);
    }
    public function produit(){
        return $this->hasMany(Produit::class);
    }
    public function materiel(){
        return $this->hasMany(Materiel::class);
    }
    public function stock_poulet(){
        return $this->hasMany(Stock_poulet::class);
    }

}
