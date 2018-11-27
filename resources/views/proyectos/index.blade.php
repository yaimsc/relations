@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Titulo</th>
      <th>Responsable</th>
    </tr>
    <tr>
    	@foreach($proyectos as $proyecto)
    	<tr>
    		<td>{{ $proyecto -> id }}</td>
    		<td>{{ $proyecto -> nombre}}</td>
    		<td>{{ $proyecto -> titulo}}</td>
        @if(isset($proyecto->empleado))
        <td><a href="/empleado/{{$proyecto->empleado->id}}">{{$proyecto->empleado->nombre}}</a></td>
        @else
        <td>hola</td>
        @endif
    	</tr>
    	@endforeach
    </tr>
  </table>

@endsection
