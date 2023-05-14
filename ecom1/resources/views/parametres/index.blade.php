@extends('principale')
@section('title')
Dashboard
@endsection
 
@section('content')
<h1>parametre</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form action="/parametre" method="POST" enctype="multipart/form-data"    class="needs-validation" novalidate>
    @csrf
        <div class="form-group">
            <div class="form-row">
                 <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Nom de site</label>
                    <input type="text" name="nom" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Numero whatssap</label>
                    <input type="text" name="num" class="form-control" id="validationCustom02"  required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04">device</label>
                    <input type="text" name="device" class="form-control" id="validationCustom04"  required>
                    <div class="invalid-feedback">
                      Please provide a valid device.
                    </div>
                  </div>
         </div>
           
       
          <div class="form-row">
            <div class="col-md-6 mb-3">
                <textarea name="pixel" class="form-control" id="textAreaExample3" rows="2"></textarea>
                <label class="form-label" for="textAreaExample3">pixel code</label>
              <div class="invalid-feedback">
                Please provide a valid price.
              </div>
            </div>
          </div>
        
           <center> <button class="btn btn-primary" type="submit">Submit form</button></center>
           
          
       
        </form>
@endsection
 

    
	

