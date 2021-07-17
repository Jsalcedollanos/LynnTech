<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       /*  $productos = Producto::all();
        return view('producto.index')->with('productos', $productos);  */

        $nombre = $request->get('busqueda');
        $productos = Producto::where('nombre','like',"%$nombre%")->paginate(5);
        return view('producto.index',compact('productos'));

    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $productos = new Producto();
        $productos->codigo = $request->get('codigo');
        $request->validate([
            'imagen' => 'required|image|max:2048'
        ]);
        if ($request->hasfile('imagen')) {
            $file = $request->file('imagen');
            $destinationPath = 'img/featureds/';
            $filename = time(). '-' . $file->getClientOriginalName();
            $uplaadSuccess = $request->file('imagen')->move($destinationPath, $filename);
            $productos -> imagen = $destinationPath . $filename;
        }

        $request->validate([
            'imagenGrande' => 'required|image|max:2048'
        ]);
        if ($request->hasfile('imagenGrande')) {
            $file = $request->file('imagenGrande');
            $destinationPath = 'img/featureds/';
            $filename = time(). '-' . $file->getClientOriginalName();
            $uplaadSuccess = $request->file('imagenGrande')->move($destinationPath, $filename);
            $productos -> imagenGrande = $destinationPath . $filename;
        }


        $productos->nombre = $request->get('nombre');
        $productos->cantidad = $request->get('cantidad');
        $productos->valor = $request->get('valor');
        $productos->categoria = $request->get('categoria');
        $productos->color = $request ->get('color');
        $productos->descripcion = $request->get('descripcion');
        $productos->save();
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
        $producto = Producto::find($id);
        return view('producto.edit')->with('producto',$producto);
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
        $producto = Producto::find($id);
        $request->validate([
            'imagen' => 'required|image|max:2048'
        ]);
        if ($request->hasfile('imagen')) {
            $file = $request->file('imagen');
            $destinationPath = 'img/featureds/';
            $filename = time(). '-' . $file->getClientOriginalName();
            $uplaadSuccess = $request->file('imagen')->move($destinationPath, $filename);
            $productos -> imagen = $destinationPath . $filename;
        }

        $request->validate([
            'imagenGrande' => 'required|image|max:2048'
        ]);
        if ($request->hasfile('imagenGrande')) {
            $file = $request->file('imagenGrande');
            $destinationPath = 'img/featureds/';
            $filename = time(). '-' . $file->getClientOriginalName();
            $uplaadSuccess = $request->file('imagenGrande')->move($destinationPath, $filename);
            $productos -> imagen = $destinationPath . $filename;
        }

        $producto->titulo = $request->get('titulo');
        $producto->cantidad = $request->get('cantidad');
        $producto->valor = $request->get('valor');
        $producto->descripcion = $request->get('descripcion');
        $producto->save();
        return redirect('/productos');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect('/productos');
    }
}
