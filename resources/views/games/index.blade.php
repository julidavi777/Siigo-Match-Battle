@extends('layouts.app')

@section('title', 'Juego')

@section('content')
<div class="row mt-5 pt-3 mb-3 pb-3">
    {{-- @foreach ( $games as $match ) --}}
    <div class="col-sm-4">
            <div class="container">
                <div class="form d-flex justify-content-center gap-3">
                    <form action="/games" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">

                        @csrf
                        <div class="text-center mt-5 rounded">
                            <label class="" for="join" class="form-label"><h3 class="text-white">Ingrese el codigo de la partida</h3></label>
                            <input type="text" name="join" id="join" class="form-control" placeholder="Código de la partida" value="{{ $game->code}}">
                        </div>
                        <div class="game d-flex justify-content-center mt-5 gap-3">
                            {{-- @foreach ( $games as $match ) --}}
                                <a class="btn btn-success" type=submit href="/games/{{$game->id}}" role="button">Ingresara la Partida {{ $match->id }}</a>
                            </div>
                        </form>
                </div>
            </div>
    </div>
    {{-- @endforeach --}}
</div>
@endsection
