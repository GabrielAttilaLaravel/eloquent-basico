@extends('layaout')

@section('content')
    <div class="container">
        <p class="alert alert-success">
            El usuario se elimino correctamente.
            <a href="{{ route('home') }}">
                Ir al Home
            </a>
        </p>
    </div>
@endsection