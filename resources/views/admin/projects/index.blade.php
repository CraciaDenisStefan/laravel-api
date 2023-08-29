@extends('layouts.admin')

@section('content')

<div class="container">
<div class="col-12 col-sm-6 col-md-3 my-5">
  <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Aggiungi progetto</a>
</div>

    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Data</th>
            <th scope="col">Apri</th>
            <th scope="col">Modifica/Elimina</th>
          </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
          <tr >
            <th scope="row">{{$project->id}}</th>
            <td>{{$project->title}}</td>
            <td>{{$project->date}}</td>
            <td><a href="{{route('admin.projects.show', $project->id)}}"><i class="fa-solid fa-eye"></i></a></td>
            <td>
              <div class="d-flex">
                  <a href="{{route('admin.projects.edit', $project->id)}}"><i class="fa-solid fa-pen-to-square text-warning"></i></a>
                  <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST" onsubmit="return confirm('Sei sicuro di voler cancellare ?!?!?!?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn text-danger">
                      <i class="fa-solid fa-trash-can"></i>
                    </button>
                  </form>
              </div>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>

</div>

@endsection