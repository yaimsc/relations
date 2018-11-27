@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empresas</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Direccion</th>
    </tr>
    <tr>
    	@foreach($empresas as $empresa)
    	<tr>
	    	<td>{{ $empresa -> id }}</td>
	    	<td>{{ $empresa -> nombre}}</td>
        <td>{{ $empresa -> direccion}}</td>
      </tr>
    	@endforeach
    </tr>
  </table>

@endsection