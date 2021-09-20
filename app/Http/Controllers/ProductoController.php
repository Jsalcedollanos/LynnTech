<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Response;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('productos.admin');
    }

    public function index(Request $request)
    {

        $producto = Producto::select('id','codigo','nombre','descripcion','categoria','color','cantidad','valor','imagen')->get();
        return datatables()->of($producto)
        
        ->toJson();
        
        
    }

    
    public function mostrar()
    {
      return view('producto.index');
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
    /* $validator = Validator::make($request->all(),[
        'codigo' => 'required|codigo|unique:producto',
        'nombre' => 'required',
        'cantidad' => 'required',
        'valor' => 'required',
        'categoria' => 'required',
        'color' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required|image|max:2048',
        'imagenGrande' => 'required|image|max:2048'
    ]); */
    /* if (!$validator->passes()) {
        return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
    }; */


    $producto = new Producto();

    $request -> validate([
        
        'nombre' => 'required',
        'cantidad' => 'required',
        'valor' => 'required',
        'categoria' => 'required',
        'color' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required|mimes:jpeg, png',
        'imagenGrande' => 'required|mimes:jpeg, png'
    ]);
            $producto->codigo = $request->post('codigo');
            $producto->nombre = $request->post('nombre');
            $producto->cantidad = $request->post('cantidad');
            $producto->valor = $request->post('valor');
            $producto->categoria = $request->post('categoria');
            $producto->color = $request ->post('color');
            $producto->descripcion = $request->post('descripcion');

        if ($request->hasfile('imagen')) {
        $file = $request->file('imagen');
        $destinationPath = 'img/featureds/';
        $filename = time(). '-' . $file->getClientOriginalName();
        $uplaadSuccess = $request->file('imagen')->move($destinationPath, $filename);
        $producto -> imagen = $destinationPath . $filename;
    }
        /* Fin Imagen Normal */

        if ($request->hasfile('imagenGrande')) {
            $file = $request->file('imagenGrande');
            $destinationPath = 'img/featureds/';
            $filename = time(). '-' . $file->getClientOriginalName();
            $uplaadSuccess = $request->file('imagenGrande')->move($destinationPath, $filename);
            $producto -> imagenGrande = $destinationPath . $filename;
        }
        /* Fin Imagen Grande */


        /* Guardar Datos de metodo POST retornando un archivo json */
        $producto->save();
        return Response::json($producto);
        /* Fin */
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

        $where = array('id' => $id);
        $producto  = Producto::where($where)->first();
        return Response::json($producto);
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
        $request -> validate([
        
            'nombre' => 'required',
            'cantidad' => 'required',
            'valor' => 'required',
            'categoria' => 'required',
            'color' => 'required',
            'descripcion' => 'required',
        ]);
        $producto = Producto::find($id);
        $producto ->fill($request->all());
        
        $producto->save();
        return response()->json([
            "mensaje" => "listo"
        ]);
        


        /* $producto->codigo = $request->post('codigo');
        $producto->nombre = $request->post('nombre');
        $producto->cantidad = $request->post('cantidad');
        $producto->valor = $request->post('valor');
        $producto->categoria = $request->post('categoria');
        $producto->color = $request ->post('color');
        $producto->descripcion = $request->post('descripcion'); */

       


        /* Guardar Datos de metodo POST retornando un archivo json */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* $producto = Producto::where('id',$id)->delete();
        return Response::json($producto); */

        Producto::find($id)->delete($id);
  
        return response()->json([
        'success' => 'Record deleted successfully!'
        ]);   
    }
}
