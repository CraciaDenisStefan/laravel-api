@extends('layouts.admin')

@section('content')



<div class="container mt-4">
 
    <form class="text-white" action="{{route('admin.types.update', $type->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group m-3">
            <label class="control-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control @error('name')is-invalid @enderror" value="{{old('name') ?? $type->name}}">
            @error('name')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group m-3">
            <div class="col-2">
                <img class="img-fluid" src="{{ asset('storage/'.$type->image_type) }}" >
            </div>
            <label class="control-label">Immagine</label>
            <input type="file" name="image_type" id="image_type" class="form-control @error('image_type')is-invalid @enderror">
            @error('image_type')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group m-3">
            <button type="submit"  class="btn btn-primary">Salva</button>
        </div>
        
        </form>
</div>

@endsection