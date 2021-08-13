<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this ->middleware('facturas.admin');
    }

    public function index(Request $request)
    {

        $cedula = $request->get('busqueda');
        $facturas = Factura::where('cedula','like',"%$cedula%")->paginate(5);
        return view('factura.index',compact('facturas'));

     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('factura.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

   

    public function store(Request $request)
    {
        $facturas = new Factura();
        $facturas->nfactura = $request->get('nfactura');
        $facturas->nombre = $request->get('nombre');
        $facturas->apellido = $request->get('apellido');
        $facturas->cedula = $request->get('cedula');
        $facturas->telefono = $request->get('telefono');
        $facturas->direccion = $request->get('direccion');
        $facturas->valor = $request->get('valor');
        $facturas->save();
        return redirect('/admin');
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
    public function edit($nfactura)
    {
        $factura = Factura::find($nfactura);
        return view('factura.edit')->with('factura',$factura);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $nfactura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nfactura)
    {
        $factura = Factura::find($nfactura);
        $factura->cedula = $request->get('cedula');
        $factura->nombre = $request->get('nombre');
        $factura->apellido = $request->get('apellido');
        $factura->telefono = $request->get('telefono');
        $factura->direccion = $request->get('direccion');
        $factura->valor = $request->get('valor');

        $factura->save();
        return redirect('/facturas');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $factura = Factura::find($id);
        $factura->delete();
        return redirect('/facturas');
    }
}
