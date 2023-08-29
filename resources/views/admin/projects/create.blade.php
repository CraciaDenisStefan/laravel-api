@extends('layouts.admin')

@section('content')



<div class="container mt-4">
 
    <form class="text-white" action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group m-3">
            <label class="control-label">Titolo</label>
            <input type="text" name="title" id="title" class="form-control @error('title')is-invalid @enderror" value="{{old('title')}}">
            @error('title')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group m-3">
            <label class="control-label">Data creazione</label>
            <input type="date" name="date" id="date" class="form-control  @error('date')is-invalid @enderror" value="{{old('date')}}">
            @error('date')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group m-3">
            <label class="control-label">Tipologia</label>
            <select class="form-select @error('type_id') is_invalid @enderror"  name="type_id" id="type_id">
                <option value="">Seleziona tipologia</option>
                @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
            @error('type_id')
            <div class="text-danger">{{$message}}</div>
            @enderror

        </div>
        <div class="form-group m-3">
            <label class="control-label">Immagine</label>
            <input type="file" name="cover_image" id="cover_image" class="form-control @error('cover_image')is-invalid @enderror">
            @error('cover_image')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group m-3">
            <p>Seleziona le tecnologie usate</p>
            @foreach($technologies as $tech)
                <div class="d-flex">
                    <input type="checkbox" name="technologies[]" value="{{$tech->id}}" class="form-check-input" {{in_array($tech->id, old('technologies', [])) ? 'checked' : ''}}>
                    <label class="control-label"> {{$tech->name}}</label>
                </div>
            @endforeach
                @error('technologies_id')
                <div class="text-danger">{{$message}}</div>
                @enderror

        </div>



        <div class="form-group m-3">
            <label class="control-label">Descrizione</label>
            <textarea name="description" id="description" class="form-control  @error('description')is-invalid @enderror">{{old('description')}}</textarea>
            @error('description')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group m-3">
            <button type="submit"  class="btn btn-primary">Salva</button>
        </div>
        
        </form>
</div>

@endsection