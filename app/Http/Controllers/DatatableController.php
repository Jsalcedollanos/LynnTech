<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use yajra\Datatables\Datatables;
class DatatableController extends Controller
{
    public function index(Request $request)
    {
        $producto = Producto::select('id','nombre','descripcion','color','cantidad','categoria','valor')->get();
        return datatables()->of($producto)->toJson();
    }


    public function mostrar()
    {
      return view('prueba.index');
    }

}
