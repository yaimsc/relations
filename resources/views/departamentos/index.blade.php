@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>


  <table>
    <tr>
      <th>Id</th>
      <th>Codigo</th>
      <th>Nombre</th>
    </tr>
    <tr>
    	@foreach($departamentos as $departamento)
    	<tr>
    		<td>{{ $departamento -> id}}</td>
    		<td>{{ $departamento -> codigo}}</td>
    		<td><a href="/departamento/{{$departamento->id}}">{{ $departamento -> nombre}}</a></td>
    	</tr>
    	@endforeach
    </tr>
  </table>

@endsection
