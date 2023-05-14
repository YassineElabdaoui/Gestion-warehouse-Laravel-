<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
   /* function index()
    {
        return view('categories.index');

    }*/
    function affiche()
    {
        $af = Categorie ::select('id','nom','created_at')->get() ;
        return view('categories.index',compact('af'));
    }
    function store(Request $request)
    {
        $name= request('nom');
        $categorie= new Categorie();
        $categorie->nom= $name;
        $categorie->save();
        return back();
    }
    function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('categories.editcat', compact('categorie'));
    }
    function update(Request $request, $id)
    {
        $categorie = Categorie::find($id);
        $name= request('nom');
        
        $categorie->nom= $name;
        $categorie->update();
        return redirect('categories');

    }
    function destroy(Request $request,$id)
    {
        $categorie= Categorie::find($id);
        $categorie->delete();
        return redirect('categories');
    }
}
