@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre/Apellido</th>
      <th>Departamento</th>
      <th>Responsable del proyecto</th>
    </tr>
    <tr>
    	@foreach($empleados as $empleado)
    	<tr>
	    	<td>{{ $empleado -> id }}</td>
	    	<td>{{ $empleado -> nombre}} / {{ $empleado -> apellido1}}</td>
        <td>
        {{ (isset($empleado->departamento)) ? $empleado->departamento->nombre : 'No hay' }}
        </td>
        @if(isset($empleado->proyecto))
	    	<td><a href="/proyecto/{{$empleado->proyecto->id}}">{{ $empleado -> proyecto -> nombre }}</a></td>
        @else
          <td>hola</td>
        @endif
	    </tr>
    	@endforeach
    </tr>
  </table>
  <a href="/empleados/insert"><button>Añadir Empleado</button></a>

@endsection
