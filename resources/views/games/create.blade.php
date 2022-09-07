@extends('layouts.app')

@section('title', 'Crear Partida')

@section('content')
    <div class="container col col-6 bg-light text-dark rounded mt-2 pt-3">
        <div class="mb-3 d-flex justify-content-center">
            <label for="code" class="form-label"><b>Código partida:</b></label>
        </div>
        <div class="mb-3 d-flex justify-content-center">
            <input type="button" class="btn btn-success" id="code" name="code" value="Generar">
        </div>
        <div class="mt-5 mb-3 d-flex justify-content-center">
            <input type="text" value="{{ $azar }}">
        </div>

    </div>
@endsection
