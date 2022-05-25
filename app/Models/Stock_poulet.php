<?php

namespace App\Models;

use App\Models\Poulailler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock_poulet extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function poulailler(){
        return $this->belongsTo(Poulailler::class);
    }
}
