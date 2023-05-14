<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;

class Produit extends Model
{
   // protected $table = 'produit';
    use HasFactory;
    protected $fillables=[
        'id',
        'nom',
        'ref',
        'prix',
        'quantite',
        'description',
        'created_at',
        'updated_at',
        'id_cat',
        'image',
        'is_active',
    ];
    public function categories()
    {
        return $this->belongsTo(Categorie::class,'id_cat');
    }
    public function commandes()
    {
        return $this->hasMany( Commande::class,'id_prod','id');
    }
}
