<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $table = 'Ville';
    protected $fillable=[
        'id',
        'nom',
    ];
    public function commandes()
    {
        return $this->hasMany( Commande::class,'id_ville','id');
    }

}
