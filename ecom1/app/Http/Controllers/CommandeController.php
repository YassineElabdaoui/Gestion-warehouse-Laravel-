<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Produit;
use App\Models\Status;
use App\Models\Ville;
use Illuminate\Http\Request;

use function Symfony\Component\String\s;

class CommandeController extends Controller
{
   /* function index()
    {
        return view('commandes.index');

    }*/
    function affiche()
    {
       
        // $af = Commande ::select('nom','tel','id_prod','id_ville','id_status','prix','created_at')->get() ;
        $commandes = Commande::with('Status','villes')->get();
        $status = Status::with('commandes')->get();
        $villes = Ville::with('commandes')->get();
        $produit = Produit::with('commandes')->get();
        $v=Ville::all();
        $s=Status::all();
        $p=Produit::all();
        return view('commandes.index',compact('commandes','status','villes','s','v','p'));
    }
    function store(Request $request)
  {
    $commande=new Commande();
    $commande->nom=request('nom');
    $commande->tel=request('tel');
    $commande->prix=request('prix');
    $commande->id_ville=request('ville');
    $commande->id_status=request('status');
    $commande->id_prod=request('produit');
    $commande->save();
        return back();
  }
  function edit($id)
  {
      $commande = Commande::find($id);
       $v=Ville::all();
        $s=Status::all();
        $p=Produit::all();
      return view('commandes.editcom', compact('commande','s','v','p'));
  }
  function update(Request $request, $id)
  {
    $commande=Commande::find($id);
    $commande->nom=request('nom');
    $commande->tel=request('tel');
    $commande->prix=request('prix');
    $commande->id_ville=request('ville');
    $commande->id_status=request('status');
    $commande->id_prod=request('produit');
    $commande->update();
    return redirect('commandes');

  }
  function destroy(Request $request,$id)
  {
    $commande=Commande::find($id);
    $commande->delete();
    return redirect('commandes');
  }
}
