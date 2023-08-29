@extends('layouts.admin')

@section('content')
    <div class="container mt-4 text-white">
        <div class="col-12 col-sm-6 col-md-3 my-5">
            <a href="{{route('admin.types.index')}}" class="btn btn-primary">Torna alle tipologie</a>
          </div>
        <h1>{{$type->name}}</h1>
        <div class="col-6">     
            @if(!empty($type->image_type))
                <img class="img-fluid" src="{{ asset('storage/'.$type->image_type) }}">
            @else 
                Immagine non disponibile.
            @endif
        </div>
    </div>
    

@endsection