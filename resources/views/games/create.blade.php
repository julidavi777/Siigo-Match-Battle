@extends('layouts.app')

@section('title', 'Crear Partida')

@section('content')
    <div class="container col col-4 bg-light text-dark rounded mt-2 pt-3">
        <?php
        function hexadecimalAzar($caracteres){
        $bytes = random_bytes($caracteres/2);
        return bin2hex($bytes);
        }
        ?>
        <div class="mb-2 d-flex justify-content-center">
            <div class="row">
                <div class="input-group mb-1 mt-3">
                    <span class="form-control" id="aut_code"><b>Código partida:</b></span>
                    <input type="text" class="form-control" id="aut_code" name="aut_code" value="<?php echo hexadecimalAzar(16); ?>" readonly>
                    <p class="txt-center">*Copie este código y peguelo en el campo de abajo para poder crear una partida</p>
                </div>
                <div class="form">
                    <form action="/games" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-1 mt-3">
                            <span class="form-control" id="code">Copia el código:</span>
                            <input type="text" class="form-control" id="code" name="code" placeholder="Pegue el código">
                        </div>
                        <br>
                        <div class="mt-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </form>

                </div>
                <div class="mb-2 d-flex justify-content-center">
                    <a href="/games/" type="button" class="btn btn-warning">Ir a iniciar partida</a>
                </div>
            </div>

        </div>
    </div>
@endsection
