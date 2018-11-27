<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado; 

class EmpleadoController extends Controller
{
  public function index ()
  {

  	$empleados = Empleado::all();
      return view ('empleados.index',[ 'empleados' => $empleados]);
  }

  public function get ($id)
  {

  	$empleado = Empleado::find($id); 
      return view ('empleados.empleado', [ 'empleado' => $empleado]);
  }

  public function insert(Request $request){

    $empleado = new Empleado; 

    $empleado->nombre = $request->input('nombre');
    $empleado->apellido1 =  $request->input('apellido1'); 
    $empleado->apellido2 = $request->input('apellido2');
    $empleado->email = $request->input('email');
    $empleado->telefono =  $request->input('telefono');
    $empleado->departamento_id = $request->input('departamento'); 

    $empleado->save(); 

    return view ('empleados.index'); 
  }
}


