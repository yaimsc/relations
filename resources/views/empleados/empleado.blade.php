@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleado:{{ $empleado -> nombre}}</h2>
  @if(isset($empleado->proyecto))
  <h3>Responsable del proyecto:{{$empleado->proyecto->nombre}}</h3>
  @endif
  <h3>Colabora en los siguientes proyectos:</h3>
  
  <table>
  	<tr>
  		<th>Nombre</th>
  		<th>Fecha Inicio</th>
  		<th>Fecha Fin</th>
  	</tr>
  	<tr>
  	@foreach($empleado->proyectos as $proyecto)
  		<tr>
  			<td>{{$proyecto->nombre}}</td>
  			<td>{{date('d-m-Y', strtotime($proyecto->pivot->fechainicio))}}</td>
  			<td>{{date('d-m-Y', strtotime($proyecto->pivot->fechafin))}}</td>
  		</tr>
  	 @endforeach
  	</tr>
  </table>
  
@endsection
