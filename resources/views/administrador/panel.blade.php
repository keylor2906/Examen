@extends('templates.admin')

@section('titulo')
        <title>Panel {{session()->get('administrador')->nombre}}</title>
@stop

@section('content')

<div class="container">
            <div class="content">
                <div class="title"><h1>Administrador</h1></div>
            </div>
            <div class="row">
    <div class="col s12 m6 l6">
        <a href="/administrador/mascotas" class="item">
            <div class="card-panel grey lighten-4">
                <div class="row">
                    <div class="col s2">
                        <h3 class="color-item"><b><i class="fa fa-book"></i></b></h3>
                    </div>
                    <div class="col s10">
                        <h5>
                            <strong class="color-item">Mascotas</strong>
                        </h5>
                        <h6 class="color-subitem">Registrar y consultar mascotas</h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col s12 m6 l6">
        <a href="/logout" class="item">
            <div class="card-panel grey lighten-4">
                <div class="row">
                    <div class="col s2">
                        <h3><b><i class="fa fa-usd" aria-hidden="true"></i></b></h3>
                    </div>
                    <div class="col s10">
                        <h5>
                            <strong class="color-item">Salir</strong>
                        </h5>
                        <h6 class="color-subitem">Salir del sistema</h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
        </div>

@stop