@extends('layouts.app')

@section('title', 'Jugadores')

@section('content')
<div class="container col col-4 bg-light text-dark rounded mt-2 pt-3">
    <div class="row mt-1 pt-1 mb-3 pb-3">
        <div class="col-sm">
            <h3 class="text-center">Jugadores</h3>
            <br>
            <div class="form d-flex justify-content-center gap-3">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre Usuario</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Id juego</th>
                        </tr>
                    </thead>
                    @foreach ( $users as  $player )
                    <tbody>
                        <tr class="align-middle">
                            <th scope="row"> {{ $player->id }} </th>
                            <td> {{ $player->nick_name }} </td>
                            <td> {{ $player->type }} </td>
                            <td> {{ $player->game_id }} </td>
                        </tr>
                    </tbody>
                @endforeach
                </table>
            </div>
            <br>
            <div class="mb-2 d-flex justify-content-center">
            {{-- @foreach ( $query as $game )

            @endforeach --}}
            <a href="/games" type="button" class="btn btn-success">Ir a iniciar parida</a>
            </div>
        </div>
    </div>
</div>
@endsection
