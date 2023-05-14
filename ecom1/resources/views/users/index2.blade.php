@extends('principale')
@section('title')
Dashboard
@endsection
@section('stylshett')

 
@section('content')

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th scope="col"> id </th>
            <th scope="col"> nom </th>
            <th scope="col"> tel</th>
            <th scope="col"> role </th>
            <th scope="col"> email</th>
            <th scope="col"> options </th>
           
        </tr>
    </thead>
    @livewireStyles
    <tbody>
        @foreach ($af as $a)
        <tr>
            <td>{{ $a->id}}</td> 
            <td>{{ $a->name}}</td>
            <td>{{ $a->tel}}</td>
            <td>{{ $a->role}}</td>
            <td>{{ $a->email}}</td>
            <td>
                <div class="btn">
                @livewire('toggle-button', ['model' => $a, 'field' => 'status'], key($a->id)) 
               </div>
            </td>
        </tr>
            
        @endforeach
       
    </tbody>
</table>
@livewireScripts

@endsection

@endsection