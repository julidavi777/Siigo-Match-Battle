@extends('layouts.app')

@section('title', 'Crear Partida')

@section('content')
    <div class="container">
        <div class="form d-flex justify-content-center gap-3">
            <form action="/games" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">
                @csrf
                <div class="text-center mt-5 rounded">
                    <label class="" for="join" class="form-label"><h3 class="text-white">Ingrese el codigo de la partida</h3></label>
                    <input type="text" name="join" id="join" class="form-control" placeholder="Código de la partida" aria-describedby="helpId">
                </div>
                <div class="game d-flex justify-content-center mt-5 gap-3">
                    <a class="btn btn-success" href="/games" role="button">Ingresara la Partida</a>
                </div>
                {{-- <div class="text-center ">
                    <button type="button" href="/games/" value="Unirse" class="btn btn-danger mt-2 w-50 mb-5"> </button>
                </div> --}}
            </form>
        </div>

    </div>
@endsection
