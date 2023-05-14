<?php

namespace App\Http\Controllers;

use App\Models\Parametre;
use Illuminate\Http\Request;

class ParametreController extends Controller
{
    function index()
    {
        return view('parametres.index');
    }
    function store(Request $request)
    {
        $para=new Parametre();
        $para->nom_site=request('nom');
        $para->num=request('num');
        $para->device=request('device');
        $para->pixel_code=request('pixel');
        $para->save();
        return back();

    }

}
