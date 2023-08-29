@extends('layouts.admin')

@section('content')
    <div class="container mt-4 text-white">
        <div class="col-12 col-sm-6 col-md-3 my-5">
            <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna alla Dashboard</a>
          </div>
        <h1>{{$project->title}}</h1>
        <p class="mt-4">{{$project->description}}</p>
        <div class="col-4">
            @if(!empty($project->cover_image))
                <img class="img-fluid" src="{{ asset('storage/'.$project->cover_image) }}">
            @else 
                Immagine non disponibile.
            @endif
        </div>
        <div class="col-12">
            
            @if(!empty($project->type->name))
            Tipologia:
            {{ $project->type->name }}
            <div class="col-2">     
                @if(!empty($project->type->image_type))
                    <img class="img-fluid" src="{{ asset('storage/'.$project->type->image_type) }}">
                @endif
            </div>
        @endif
        </div>

        @if($project->technologies->count() > 0)
        <div>
            Tecnologie usate:
            @foreach($project->technologies as $tech)
               <a class="d-flex" href="{{route('admin.technologies.show',$tech->id)}}">{{$tech->name}} </a> 
            @endforeach
        </div>
    @endif
    </div>
    </div>
    

@endsection