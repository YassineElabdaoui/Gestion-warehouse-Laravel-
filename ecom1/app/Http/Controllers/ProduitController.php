<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use date;
use Illuminate\Support\Facades\File; 
use Illuminate\Contracts\Support\ValidatedData;


use Illuminate\Support\Facades\Route;

class ProduitController extends Controller
{
    /*function index()
    {
        return view('produits.index');
    }*/
    function affiche()
    {
        //$af = Produit ::select('id','nom','ref','prix')->get() ;
        //return view('produits.index',compact('af','users'));
        $produits = Produit::with('categories')->get();
        $categories = Categorie::with('produits')->get();
        $af = Categorie::select('id', 'nom', 'created_at')->get();
        return view('produits.index', compact('produits', 'categories', 'af'));
    }
    function store(Request $request)
    {
        $pseudo = request('nom');
        $ref = request('ref');
        $prix = request('prix');
        $quantite = request('quantite');
        $cat = request('cat');
        $des = request('des');

        $produit = new Produit();
        $produit->nom = $pseudo;
        $produit->ref = $ref;
        $produit->prix = $prix;
        $produit->quantite = $quantite;
        $produit->description = $des;
        $produit->id_cat = $cat;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/image/', $filename);
            $produit->image = $filename;
        }

        $produit->save();
        return back();
    }
    function edit($id)
    {
        $produit = Produit::find($id);
        return view('produits.editProd', compact('produit'));
    }
    function update(Request $request, $id)
    {
        $produit = Produit::find($id);
        if ($request->hasFile('image')) {
            $path = 'public/image/' . $produit->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/image/', $filename);
            $produit->image = $filename;
        }
        $pseudo = request('nom');
        $ref = request('ref');
        $prix = request('prix');
        $quantite = request('quantite');
        $cat = request('cat');
        $produit->nom = $pseudo;
        $produit->ref = $ref;
        $produit->prix = $prix;
        $produit->quantite = $quantite;
        $produit->id_cat = $cat;
        $produit->update();
        return redirect('produits');
    }
    function destroy(Request $request,$id)
    {
        $produit = Produit::find($id);
        if ($request->hasFile('image')) {
            $path = 'public/image/' . $produit->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $produit->delete();
        return redirect('produits');

    }
}

