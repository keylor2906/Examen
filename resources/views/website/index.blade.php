@extends('templates.website')

@section('titulo')
        <title>Veterinaria</title>
@stop

@section('content')
        <div class="container">
            <div class="content">
                <div class="title"><h1>Veterinaria</h1></div>
            </div>
            <div class="row">
    <div class="col s12 m6 l6">
        <a href="/registrar_usuario" class="item">
            <div class="card-panel grey lighten-4">
                <div class="row">
                    <div class="col s2">
                        <h3 class="color-item"><b><i class="fa fa-book"></i></b></h3>
                    </div>
                    <div class="col s10">
                        <h5>
                            <strong class="color-item">Registar Usuario</strong>
                        </h5>
                        <h6 class="color-subitem">Registrar un nuevo usuario</h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col s12 m6 l6">
        <a href="/ingresar" class="item">
            <div class="card-panel grey lighten-4">
                <div class="row">
                    <div class="col s2">
                        <h3><b><i class="fa fa-usd" aria-hidden="true"></i></b></h3>
                    </div>
                    <div class="col s10">
                        <h5>
                            <strong class="color-item">Ingresar</strong>
                        </h5>
                        <h6 class="color-subitem">Ingresar al sistema</h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
        </div>
@stop