@extends('layouts.app')

@section('title', 'Crear Usuario')

@section('content')
    <div class="container col col-4 rounded mt-2 pt-3">
        <form action="/users" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nick_name" class="form-label text-white">Nombre de usuario:</label>
                <input type="text" class="form-control" id="nick_name" name="nick_name" placeholder="Nombre de usuario">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label text-white">Tipo de usurio:</label>
                <select class="form-select" id="type" name="type">
                    <option selected>Seleccionar</option>
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="game_id" class="form-label text-white">Ingrese el número de la partida:</label>
                <input type="number" name="game_id" id="game_id" class="form-control" placeholder="Número de la partida" value="">
            </div>
            <div class="mt-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
            <br>
            <div class="mb-2 d-flex justify-content-center">
                <a href="/users/" type="button" class="btn btn-warning">Ver jugadores</a>
            </div>
        </form>
    </div>
@endsection
