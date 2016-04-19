@extends('templates.admin')

@section('titulo')
        <title>Mascotas</title>
@stop

@section('content')

<section id="section-ingresar" class="container">

  <div class="row">

    <form class="col s12" method="post" action="/registro_mascotas">
    {{ csrf_field() }}
      <div class="card-panel">  
        <div class="row">
          <div class="input-field col s6 push-s3">
            <i class="material-icons prefix fa fa-user"></i>
            <input name="nombre" id="nombre" type="text" class="validate">
            <label class="active" for="nombre">Nombre</label>
          </div>

        </div>

        <div class="row">
          <div class="input-field col s6 push-s3">
            <i class="material-icons prefix fa fa-user"></i>
            <input name="edad" id="edad" type="text" class="validate">
            <label class="active" for="edad">Edad</label>
          </div>

        </div>

        <div class="row">
          <div class="input-field col s6 push-s3">
            <i class="material-icons prefix fa fa-user"></i>
            <input name="tipo" id="tipo" type="text" class="validate">
            <label class="active" for="tipo">Tipo</label>
          </div>

        </div>

        <div class="row">
          <div class="input-field col s6 push-s3">
            <i class="material-icons prefix fa fa-user"></i>
            <input name="color" id="color" type="text" class="validate">
            <label class="active" for="color">Color</label>
          </div>

        </div>
        
        <div class="row">
         <div class="col s2 push-s5">
            <a href="/administrador" class="btn waves-effect waves-light">Regresar</a>
            <button id="btn-registrar" class="btn waves-effect waves-light" type="submit" name="btn-registrar">Registrar
              <i class="material-icons right fa fa-sign-in"></i>
            </button>

          </div>

        </div>

      </div>

    </form>

  </div>

 <?php foreach ($mascotas as $mascota): ?>
    <a href="/detalle_mascota/<?=$mascota['id']?>"><?=$mascota['nombre']?></a>
      <br>
  <?php endforeach ?>

</section>

@stop