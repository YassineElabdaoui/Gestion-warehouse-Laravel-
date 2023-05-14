@extends('principale')
@section('title')
  Dashboard
@endsection
@section('content')
        <form action="{{ url('update-com/'.$commande->id) }}" method="POST" enctype="multipart/form-data"   >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="validationCustom04">Nom</label>
                <input type="text"  value="{{ $commande->nom}}" class="form-control" name="nom">
                <label for="validationCustom04">Téléphone</label>
                <input type="text"  value="{{ $commande->tel}}" class="form-control" name="tel">
                <label for="validationCustom04">Prix</label>
                <input type="text"  value="{{ $commande->prix}}" class="form-control" name="prix">
                <select  name="status" class="custom-select" multiple>
                  <option value="{{$commande->id_status}}" selected> status actuelle : {{ $commande->status->nom }}</option>
                  @foreach($s as $a )
                    <option value="{{$a->id}}">{{$a->nom}}</option>
                  @endforeach
                </select>
                <select  name="produit" class="custom-select" multiple>
                  <option value="{{$commande->id_prod}}" selected> produit actuelle : {{ $commande->produits->nom }}</option>
                  @foreach($p as $a )
                    <option value="{{$a->id}}">{{$a->nom}}</option>
                  @endforeach
                </select>
                <select  name="ville" class="custom-select" multiple>
                  <option value="{{$commande->id_ville}}"selected> ville actuelle : {{ $commande->villes->nom }}</option>
                  @foreach($v as $a )
                    <option value="{{$a->id}}">{{$a->nom}}</option>
                  @endforeach
                </select>
              
                <button type="submit" class="btn btn-primary"> update</button>
        </form>
  @endsection