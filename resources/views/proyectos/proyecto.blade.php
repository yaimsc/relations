@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyecto:{{ $proyecto -> nombre}}</h2>
  <h3>Titulo:{{ $proyecto -> titulo}}</h3>
  @if(isset($proyecto->empleado))
  <h3>Responsable:{{ $proyecto -> empleado -> nombre  }}</h3>
  @endif
  <h3>Colaboradores:</h3>
  <table>
  	<tr>
  		<th>Nombre</th>
  		<th>Fecha Inicio</th>
  		<th>Fecha Fin</th>
  	</tr>
  	<tr>
  		@foreach($proyecto->empleados as $empleado)
  		<tr>
  			<td>{{$empleado->nombre}}</td>
  			<td>{{date('d-m-Y', strtotime($empleado->pivot->fechainicio))}}</td>
  			<td>{{date('d-m-Y', strtotime($empleado->pivot->fechafin))}}</td>
  		</tr>
  		@endforeach
  	</tr>
  </table>
 
@endsection
