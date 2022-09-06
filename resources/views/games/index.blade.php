@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <form action="/games" method="post" class="m-0 vh-100 row justify-content-center align-items-center">
            <div class="w-50 bg-light  rounded">
                <div class="text-center mt-5 rounded">
                    <label class="" for="join" class="form-label"><h3>Ingrese el codigo de la partida</h3></label>
                </div>
              <input type="text" name="join" id="join" class="form-control" placeholder="Solicite el número de partida o cree una" aria-describedby="helpId">
              <div class="text-center ">
                  <input type="submit" value="Unirse" class="btn btn-danger mt-2 w-50 mb-5">

              </div>
            </div>
        </form>
    </div>
@endsection
