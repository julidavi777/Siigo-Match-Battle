@extends('layouts.app')

@section('title', 'Juego')

@section('content')
    <div class="row mt-5 pt-3 mb-3 pb-3">
        <div class="col-sm">
            <div class="form d-flex justify-content-center gap-3">
                <form action="/games" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">
                    @csrf
                    <div class="text-center mt-5 rounded">
                        <label class="" for="join" class="form-label"><h3 class="text-white">Ingrese el codigo de la partida</h3></label>
                        <input type="text" name="join" id="join" class="form-control" placeholder="Código de la partida" value="{{ $game->code}}">
                    </div>
                    <div class="game d-flex justify-content-center mt-5 gap-3">

                        <a class="btn btn-success" type=submit href="/users/{{ $game->id }}" role="button">Ingresara la Partida {{ $game->id }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
