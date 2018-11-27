<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa; 

class EmpresaController extends Controller
{
    public function index ()
  {

  	$empresas = Empresa::all();
      return view ('empresas.index', [ 'empresas' => $empresas]);
  }
}
