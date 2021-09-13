<?php

namespace App\Http\Controllers;
use App\Models\User;
use Response;
use Illuminate\Support\Facades\Crypt; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this -> middleware('auth.role');
    }
    
    public function index(Request $request)
    {
        $users = User::select('id','name','email','role','created_at')->get();
        return datatables()->of($users)  
        ->toJson();
    }

    public function mostrar()
    {
        return view('roles.index');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|min:3|max:40',
            'role' => 'required',
            'password' => 'required|min:8'
        ]);
        $user = new User();
        $user -> name = $request -> post('name');
        $user -> email = $request -> post('email');
        $user -> role = $request -> post('role');
        $user -> password = Crypt::encrypt($request -> post('password'));
        $user -> save();
        return Response::json($user);

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
        $idUsuario = array('id' => $id);
        $user  = User::where($idUsuario)->first();
        return Response::json($user);
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
        'name' => 'required|min:3|max:20',
        'email' => 'required|min:3|max:40',
        'role' => 'required'
    ]);
        $user = User::find($id);
        $user ->fill($request->all());  
        $user->save();
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete($id);
  
        return response()->json([
        'success' => 'Record deleted successfully!'
        ]);   
    }
}
