@extends('principale')
@section('title')
  Dashboard
@endsection
@section('content')
        <form action="{{ url('update-cat/'.$categorie->id) }}" method="POST" enctype="multipart/form-data"   >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="validationCustom04">Nom</label>
                <input type="text"  value="{{ $categorie->nom}}" class="form-control" name="nom">
                <button type="submit" class="btn btn-primary"> update</button>
        </form>
  @endsection