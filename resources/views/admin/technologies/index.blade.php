@extends('layouts.admin')

@section('content')

<div class="container">
<div class="col-12 col-sm-6 col-md-3 my-5">
  <a href="{{route('admin.technologies.create')}}" class="btn btn-primary">Aggiungi tecnologia</a>
</div>

    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Apri Dettagli</th>
            <th scope="col">Modifica/Elimina</th>
          </tr>
        </thead>
        <tbody>
            @foreach($technologies as $tech)
          <tr >
            <th scope="row">{{$tech->id}}</th>
            <td>{{$tech->name}}</td>
            <td><a href="{{route('admin.technologies.show', $tech->id)}}"><i class="fa-solid fa-eye"></i></a></td>
            <td>
              <div class="d-flex">
                  <a href="{{route('admin.technologies.edit', $tech->id)}}"><i class="fa-solid fa-pen-to-square text-warning"></i></a>
                  <form action="{{route('admin.technologies.destroy', $tech->id)}}" method="POST" onsubmit="return confirm('Sei sicuro di voler cancellare ?!?!?!?')">
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