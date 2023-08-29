@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <div >
           <h2> Portfolio</h2>
        </div>
        <h1 class="display-5 fw-bold">
            Benvenuto !
        </h1>

        <p class="col-md-8 fs-4">Registrati per poter vedere i miei progetti: </p>
        <a class="btn btn-primary" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    </div>
</div>

@endsection