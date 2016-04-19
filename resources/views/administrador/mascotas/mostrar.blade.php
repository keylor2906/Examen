@extends('templates.admin')

@section('titulo')
        <title>Mascota <?=$mascotas['nombre']?></title>
@stop

@section('content')

	<p>
		Nombre: <?=$mascotas['nombre']?>
		<br>
		Edad: <?=$mascotas['edad']?>
		<br>
		Tipo: <?=$mascotas['tipo']?>
		<br>
		Color: <?=$mascotas['color']?>
	</p>
<a href="/administrador/mascotas" class="btn waves-effect waves-light">Regresar</a>
@stop