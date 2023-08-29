@extends('layouts.admin')

@section('content')

<div class="container">
<div class="col-12 col-sm-6 col-md-3 my-5">
  <a href="{{route('admin.types.create')}}" class="btn btn-primary">Aggiungi tipologia</a>
</div>

    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Apri Immagine</th>
            <th scope="col">Modifica/Elimina</th>
          </tr>
        </thead>
        <tbody>
            @foreach($types as $type)
          <tr >
            <th scope="row">{{$type->id}}</th>
            <td>{{$type->name}}</td>
            <td><a href="{{route('admin.types.show', $type->id)}}"><i class="fa-solid fa-eye"></i></a></td>
            <td>
              <div class="d-flex">
                  <a href="{{route('admin.types.edit', $type->id)}}"><i class="fa-solid fa-pen-to-square text-warning"></i></a>
                  <form action="{{route('admin.types.destroy', $type->id)}}" method="POST" onsubmit="return confirm('Sei sicuro di voler cancellare ?!?!?!?')">
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