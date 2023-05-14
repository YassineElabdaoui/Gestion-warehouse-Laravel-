@extends('principale')
@section('title')
  Dashboard
@endsection
@section('content')
        <form action="{{ url('update-prod/'.$produit->id) }}" method="POST" enctype="multipart/form-data"   >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="validationCustom04">Nom</label>
                <input type="text"  value="{{ $produit->nom}}" class="form-control" name="nom">
                <label for="validationCustom04">Refference</label>
                <input type="text"  value="{{ $produit->ref}}" class="form-control" name="ref">
                <label for="validationCustom04">Prix</label>
                <input type="text"  value="{{ $produit->prix}}" class="form-control" name="prix">
                <label for="validationCustom04">Quantite</label>
                <input type="text"  value="{{ $produit->quantite}}" class="form-control" name="quantite">
                <label for="validationCustom04">categorie:{{ $produit->categories->nom }}</label>
                <input type="text"  value="{{ $produit->id_cat}}" class="form-control" name="cat">
                @if ( $produit->image)
                    <img src="{{asset('public/image/'.$produit->image )}}">
                @endif
            <input type="file"   class="form-control" name="image" >
            <!--  <textarea class="description" name="description"></textarea>-->
            
            <button type="submit" class="btn btn-primary"> ajouter un produit</button>
        </form>
@endsection