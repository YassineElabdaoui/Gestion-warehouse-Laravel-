<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;

class Categorie extends Model
{
    //protected $table = 'categorie';
    //use HasFactory;
    protected $fillable=[
        'id',
        'nom',
        'created_at',
        'updated_at',
    ];
    public function produits()
    {
        return $this->hasMany( Produit::class,'id_cat','id');
    }
}
