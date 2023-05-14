<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    use HasFactory;
   
    protected $fillables=[
        'nom_site',
        'num',
        'device',
        'pixel_code',

    ];
}
