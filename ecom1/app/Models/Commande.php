<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;
use App\Models\Ville;

class Commande extends Model
{
   // protected $table = 'commande';
   use HasFactory;
    protected $fillables=[
        'id',
        'nom',
        'tel',
        'prix',
        'created_at',
        'etat',
        'updated_at',
        'id_ville',
        'id_status',
        'id_prod',
        
    ];
    public function Status()
    {
        return $this->belongsTo(Status::class,'id_status');
    }
    public function villes()
    {
        return $this->belongsTo( Ville::class,'id_ville');
    }
    public function produits()
    {
        return $this->belongsTo( Produit::class,'id_prod');
    }
}
