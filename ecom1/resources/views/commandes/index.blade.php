@extends('principale')
@section('title')
Dashboard
@endsection
@section('stylshett')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

@section('content')
@can('commande-create')
 <button class="btn btn-primary" onclick="document.getElementById('frm').style.display='inline';" /">Ajouter une commande</button>
@endcan
<form action="/commandes" method="POST" enctype="multipart/form-data"  id="frm" style="display:none;"  class="needs-validation" novalidate>
    @csrf
        <div class="form-group">
            <div class="form-row">
                 <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Nom de Produit</label>
                    <input type="text" name="nom" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Téléphone</label>
                    <input type="text" name="tel" class="form-control" id="validationCustom02"  required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  
                </div>
         </div>
        </div>
       
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom03">Prix</label>
              <input type="text" name="prix" class="form-control" id="validationCustom03" placeholder="Prix" required>
              <div class="invalid-feedback">
                Please provide a valid price.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustom04">Quantite</label>
              <input type="text" name="quantite" class="form-control" id="validationCustom04" placeholder="quantite" required>
              <div class="invalid-feedback">
                Please provide a valid quantite.
              </div>
            </div>
            <select  name="ville" class="custom-select" multiple>
                <option selected>List des Villes</option>
                @foreach($v as $a )
                  <option value="{{$a->id}}">{{$a->nom}}</option>
                @endforeach
              </select>
              <select  name="produit" class="custom-select" multiple>
                <option selected>List des produits</option>
                @foreach($p as $a )
                  <option value="{{$a->id}}">{{$a->nom}}</option>
                @endforeach
              </select>
              <select  name="status" class="custom-select" multiple>
                <option selected>List des status</option>
                @foreach($s as $a )
                  <option value="{{$a->id}}">{{$a->nom}}</option>
                @endforeach
              </select>

          </div>
          
              <button class="btn btn-primary" type="submit">Submit form</button>
</form>

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th scope="col"> nom </th>
            <th scope="col"> tel</th>
            <th scope="col"> produit </th>
            <th scope="col"> prix </th>
            <th scope="col"> status</th>
            <th scope="col"> Ville</th>
            <th scope="col"> date</th>
            
            <th scope="col"> options</th>
        </tr>
    </thead>
    @livewireStyles
    <tbody>
        @foreach ($commandes as $a)
        <tr>
            <td>{{ $a->nom}}</td>
            <td>{{ $a->tel}}</td>
            <td>{{ $a->produits->nom}}</td>
            <td>{{ $a->prix}}</td>
            <td>{{ $a->Status->nom}}</td>
            <td>{{ $a->villes->nom}}</td>
            <td>{{ $a->created_at}}</td>
            
            <td>
              @can('commande-edit')
                <div class="btn">
                    <a href="{{ url('editcom/'.$a->id )}}"> <svg xmlns="http://www.w3.org/2000/svg" width="30px" style="color:black" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg><i class="bi bi-pencil-square red-color"></i> </a>
                  </div>
              @endcan
                   
              @can('commande-delete')
                    <div class="btn">
                    
                      <a href="{{ url('delete-com/'.$a->id )}}"><svg xmlns="http://www.w3.org/2000/svg" width="30px" style="color:red" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                      </svg> </a>
                    </div>
                   @endcan
                
                 <div class="btn">
                 @livewire('toggle-button', ['model' => $a, 'field' => 'etat'], key($a->id)) 
                </div>          
            </td>

        </tr>
            
        @endforeach
        @livewireScripts
       
    </tbody>
 </table>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection

@endsection