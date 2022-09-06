@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="row">
    <div class="container d-flex justify-content-center gap-3">
        <div class="game d-flex justify-content-center mt-5 gap-3">
            <a class="btn btn-danger" href="/users/create" role="button">Nickname</a>
        </div>


        <div class="game d-flex justify-content-center mt-5 gap-3">
            <a class="btn btn-warning" href="/games/create" role="button">Crear Partida</a>
        </div>

    </div>
    {{-- <div class="game d-flex justify-content-center mt-5 gap-3">
        <a class="btn btn-success" href="/games" role="button">Ingresar Código</a>
    </div> --}}
</div>

<br>


@endsection
