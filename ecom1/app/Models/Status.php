<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commande;
class Status extends Model
{
    protected $table = 'Status';
    public function commandes()
    {
        return $this->hasMany( Commande::class,'id_status','id');
    }
}
