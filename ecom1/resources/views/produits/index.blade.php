@extends('principale')
@section('title')
Dashboard
@endsection
@section('stylshett')

<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


@section('content')

<head>
    <meta charset="utf8">
  



</head>
<!--ajouter un produit-->
     <div>
      @can('product-create')
        <button class="btn btn-primary" onclick="document.getElementById('frm').style.display='inline';" /">Ajouter un produit</button>
      @endcan 
        <form action="/produits" method="POST" enctype="multipart/form-data"  id="frm" style="display:none;"  class="needs-validation" novalidate>
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
                            <label for="validationCustom02">Refference</label>
                            <input type="text" name="ref" class="form-control" id="validationCustom02"  required>
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
                    <select  name="cat" class="custom-select" multiple>
                        <option selected>List des Catégorie</option>
                        @foreach($af as $a )
                          <option value="{{$a->id}}">{{$a->nom}}</option>
                        @endforeach
                      </select>
                    
              
                    <textarea name="des" id="editor" class="description" ></textarea>
                  
                 <script>
                   ClassicEditor
                       .create( document.querySelector( '#editor' ) )
                       .catch( error => {
                           console.error( error );
                       } );
                 </script>
                  <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                      </label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>
                  
                  <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
        
          
                <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                  'use strict';
                  window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                      form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                          event.preventDefault();
                          event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                      }, false);
                    });
                  }, false);
                })();
                </script>
                
                <!-- <input type="text" class="form-control" name="cat">-->
                       
    </div>
    <div>
        <table id="example" class="display" style="width:100%" >
            <thead>
                <tr>
                    <th scope="col" > Nom de produit </th>
                    <th scope="col"> refferences </th>
                    <th scope="col"> prix </th>
                    <th scope="col"> categorie</th>
                    <th scope="col"> options</th>
                </tr>
            </thead>
            @livewireStyles
            <tbody>
                @foreach ($produits as $a )
                <tr>
                    <td>{{ $a->nom}}</td>
                    <td>{{ $a->ref}}</td>
                    <td>{{ $a->prix}}</td>
                  <td>{{ $a->categories->nom }}</td>
                  <td>
                    @can('product-edit')
                      <div class="btn">
                          <a href="{{ url('editprod/'.$a->id )}}"> <svg xmlns="http://www.w3.org/2000/svg" width="30px" style="color:black" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg><i class="bi bi-pencil-square red-color"></i> </a>
                        </div>
                    @endcan
                      @can('product-delete')
                        <div class="btn">
                        
                          <a href="{{ url('delete-prod/'.$a->id )}}"><svg xmlns="http://www.w3.org/2000/svg" width="30px" style="color:red" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                          </svg> </a>
                       </div>
                      @endcan
                       
                          <div class="btn">
                          @livewire('toggle-button', ['model' => $a, 'field' => 'is_active'], key($a->id)) 
                          </div>
                          
                    
                  </td>
                
                </tr>
                    
                @endforeach
                @livewireScripts
            
            </tbody>
        </table>
        
    </div>
    


    

@endsection

@endsection