<?php

namespace App\Models;

use App\Models\Poulailler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gerant extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'cni',
    ];

    public function poulailler(){
        return $this->hasMany(Poulailler::class);
    }
}
