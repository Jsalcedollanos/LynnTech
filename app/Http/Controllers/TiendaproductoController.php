<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Storage;

class TiendaproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this -> middleware('user.tienda');
    }

    public function all(Request $request)
    {
        /* $productos = \BD::table('productos')
        ->select('productos.*')
        ->orderBy('id','DESC')
        ->get();
        return response(json_encode($productos),200)->header('Content-type','text/plain'); */

    }

    public function index(Request $request)
    {
        
        $categoria = $request->get('busqueda');
        $productos = Producto::where('categoria','like',"%$categoria%")->paginate(10);
        return view('producto.productos',compact('productos'));

       /*  $producto = Producto::select('id','codigo','nombre','descripcion','categoria','color','cantidad','valor','imagen')->get();
        return Response::json($producto); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function mostrar()
    {
         $producto = Producto::select('id','codigo','nombre','descripcion','categoria','color','cantidad','valor','imagen')->get();
        return Response::json($producto);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
