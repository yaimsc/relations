@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

	<form method="post" action="{{ route('form')}}" onsubmit="return alert('Empleado insertado!')">
		@csrf
		<h2>Insertar Empleado</h2>
		<label>Nombre</label>
		<input type="text" name="nombre">
		<label>Apellido1</label>
		<input type="text" name="apellido1">
		<label>Apellido2</label>
		<input type="text" name="apellido2">
		<br>
		<label>Email</label>
		<input type="text" name="email">
		<label>Tfno</label>
		<input type="number" name="telefono">
		<br>
		<label>Departamento</label>
		<select name="departamento">
			@foreach($departamentos as $departamento)
			<option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
			@endforeach
		</select>
		<br>
		<input type="submit" name="enviar" value="Enviar">
	</form>
@endsection