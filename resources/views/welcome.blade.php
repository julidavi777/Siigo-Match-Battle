@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="row">
        {{-- <div class="container d-flex justify-content-center">
            <img src= {{ asset('espadas.png') }} width="350" height="350" alt="">
        </div> --}}
        <div class="alert alert-success" role="alert">
            <h4 class="text-center"><b>Bienvenido a Siigo Match Battle</b></h4>
        </div>
        <div class="container d-flex justify-content-center gap-3">
            <div class="game d-flex justify-content-center mt-5 gap-3">
                <a class="btn btn-danger" href="/users/create" role="button">Nickname</a>
            </div>
            <div class="game d-flex justify-content-center mt-5 gap-3">
                <a class="btn btn-warning" href="/games/create" role="button">Crear Partida</a>
            </div>
        </div>
    </div>
@endsection
