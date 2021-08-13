<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function __construct(){
    $this->middleware('clientes.admin');
}


    public function index(Request $request)
    {
        $cedula = $request->get('busqueda');
        $clientes = Cliente::where('cedula','like',"%$cedula%")->paginate(5);
        return view('cliente.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes =  new Cliente();
        $clientes->cedula = $request->get('cedula');
        $clientes->primer_nombre = $request->get('primer_nombre');
        $clientes->segundo_nombre = $request->get('segundo_nombre');
        $clientes->primer_apellido = $request->get('primer_apellido');
        $clientes->segundo_apellido = $request->get('segundo_apellido');
        $clientes->telefono = $request->get('telefono');
        $clientes->direccion = $request->get('direccion');
        $clientes->ciudad = $request->get('ciudad');

        $clientes->save();
        
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
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.edit')->with('cliente',$cliente);
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
        $cliente = Cliente::find($id);
        $cliente -> cedula = $request->get('cedula');
        $cliente -> primer_nombre = $request->get('primer_nombre');
        $cliente -> segundo_nombre = $request->get('segundo_nombre');
        $cliente -> primer_apellido = $request->get('primer_apellido');
        $cliente -> segundo_apellido = $request->get('segundo_apellido');
        $cliente -> telefono = $request->get('telefono');
        $cliente -> ciudad = $request->get('ciudad');
        $cliente -> direccion = $request->get('direccion');
        $cliente->save();
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/clientes');
    }
}
