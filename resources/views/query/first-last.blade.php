@extends('layaout')

@section('content')
    <div class="container">
        <h1>
            First Last
        </h1>

        <h3>Primer Registro</h3>
        <p>ID {{ $first->id }}</p>
        <p> {{ $first->name }}</p>
        <hr>
        <h3>Ultimo Registro</h3>
        <p>ID {{ $last->id }}</p>
        <p> {{ $last->name }}</p>
    </div>
@endsection