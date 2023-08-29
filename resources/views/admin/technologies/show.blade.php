@extends('layouts.admin')

@section('content')
    <div class="container mt-4 text-white">
        <div class="col-12 col-sm-6 col-md-3 my-5">
            <a href="{{route('admin.technologies.index')}}" class="btn btn-primary">Torna alle tecnologie</a>
          </div>
        <h1>{{$technology->name}}</h1>

        @if($technology->description)
        <h5 class="mt-5">Descrizione:</h5>
        <p>{{$technology->description}}</p>
        @endif

        @if(count($technology->projects) > 0)
            <div class="col-6 mt-5">     
                <h2>Progetti che usano {{$technology->name}}</h2>
            </div>
            <div class="col-12">
                @foreach($technology->projects as $project)
                <h2 class="mt-4"><a href="{{route('admin.projects.show', $project->id)}}">{{$project->title}}</a></h2>

                @endforeach
            </div>
        @else
            Nessun projetto uttilizza questa tecnologia
        @endif
    </div>
    

@endsection