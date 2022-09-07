@extends('layouts.app')

@section('title', 'Juego')

@section('content')
    <div class="container bg-light text-dark rounded mt-5 pt-3">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <div class="container d-flex justify-content-center gap-3">
                    <img src= {{ asset('user.png') }} width="200x|" height="200x|" alt="">
                </div>
            </div>
            <div class="col">
                <div class="container d-flex justify-content-center gap-3">
                    <img src= {{ asset('user.png') }} width="200x|" height="200x|" alt="">
                </div>
            </div>
            <div class="col">
                <div class="container d-flex justify-content-center gap-3">
                    <img src= {{ asset('user.png') }} width="200x|" height="200x|" alt="">
                </div>
            </div>
            <div class="col">

            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="container d-flex justify-content-center gap-3">
                    <img src= {{ asset('user.png') }} width="200x|" height="200x|" alt="" style="transform:rotate(270deg);">
                </div>
            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
            <div class="col">
                <div class="container d-flex justify-content-center gap-3">
                    <img src= {{ asset('user.png') }} width="200x|" height="200x|" alt="" style="transform:rotate(90deg);">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <div class="container d-flex justify-content-center gap-3">
                    <img src= {{ asset('user.png') }} width="200x|" height="200x|" alt="" style="transform:rotate(180deg);">
                </div>
            </div>
            <div class="col">
                <div class="container d-flex justify-content-center gap-3">
                    <img src= {{ asset('user.png') }} width="200x|" height="200x|" alt="" style="transform:rotate(180deg);">
                </div>
            </div>
            <div class="col">

            </div>
        </div>
        <div class="container d-flex justify-content-center gap-3 mt-5 pb-5">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Elegir carta</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Elegir carta</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body row d-flex gap-3">
                            @foreach ( $cards as $item )
                            <div class="card" style="width: 18rem;">
                                <h5 class="card-title mt-2 pt-2"><b>{{ $item->title }}</b></h5>
                                <img src="{{ $item->image }}" class="img" width="250" height="300">
                                <div class="card-body">
                                    <h5 class="text-center"><b>{{ $item->rank }}</b></h5>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                        </tr>
                                      </thead>
                                    <tbody>
                                      <tr>
                                        <td>Ataque</td>
                                        <td>{{ $item->attack }}</td>
                                      </tr>
                                      <tr>
                                        <td>Defensa</td>
                                        <td>{{ $item->defense }}</td>
                                      </tr>
                                      <tr>
                                        <td>Energía</td>
                                        <td>{{ $item->energy }}</td>
                                      </tr>
                                      <tr>
                                        <td>Inteligencia</td>
                                        <td>{{ $item->intelligence }}</td>
                                      </tr>
                                      <tr>
                                        <td>Estrategia</td>
                                        <td>{{ $item->strategy }}</td>
                                      </tr>

                                    </tbody>
                                  </table>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success d-flex justify-content-center">Seleccionar</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-success">Jugar</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <a href="" type="button" class="btn btn-success">Jugar</a> --}}
            <a href="" type="button" class="btn btn-danger">Retirarse</a>
        </div>
    </div>

@endsection
