@extends('layaout')

@section('content')
    <div class="container">
        <h1 class="page-header">
            Paginate Eloquent
        </h1>
        {{ $users->total() }} Registros | Pagina
        {{ $users->currentPage() }} de {{ $users->lastPage() }}
        <table class="table table-hover table-striped">
            @include('partials.head-users')
            <tbody>
            @include('partials.list-users')
            </tbody>
        </table>
        {!! $users->render() !!}
    </div>
@endsection