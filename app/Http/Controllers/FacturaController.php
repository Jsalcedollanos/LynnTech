<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use Response;
use Illuminate\Support\Facades\Storage;
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
        $facturas = Factura::select('id','codigo','nfactura','cedula','nombres','apellidos','telefono','direccion','valor','created_at')->get();
        return datatables()->of($facturas)
        
        ->toJson();
    }

    public function mostrar()
    {
        return view('factura.index');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

   

    public function store(Request $request)
    {
        $request -> validate([
            'nombres' => 'required|min:3|max:25',
            'apellidos' => 'required|min:3|max:30',
            'codigo' => 'required|confirmed',
            'cedula' => 'required|min:8|max:10',
            'telefono' => 'required|min:7|max:11',
            'direccion' => 'required|max:25',
            'valor' => 'required|min:1'
        ]);
        $factura = new Factura();
        $factura->nfactura = $request->post('nfactura');
        $factura->codigo = $request->post('codigo');
        $factura->nombres = $request->post('nombres');
        $factura->apellidos = $request->post('apellidos');
        $factura->cedula = $request->post('cedula');
        $factura->telefono = $request->post('telefono');
        $factura->direccion = $request->post('direccion');
        $factura->valor = $request->post('valor');
        $factura->save();
        return Response::json($factura);
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
        $idFactura = array('id' => $id);
        $factura  = Factura::where($idFactura)->first();
        return Response::json($factura);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $nfactura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            'nombres' => 'required|min:3|max:25',
            'apellidos' => 'required|min:3|max:30',
            'codigo' => 'required',
            'cedula' => 'required|min:8|max:10',
            'telefono' => 'required|min:7|max:11',
            'direccion' => 'required|max:25',
            'valor' => 'required|min:1'
        ]);
        $factura = Factura::find($id);
        $factura ->fill($request->all());
        
        $factura->save();
        return response()->json([
            "mensaje" => "listo"
        ]);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Factura::find($id)->delete($id);
        return response()->json([
        'success' => 'Record deleted successfully!'
        ]);  
    }
}
