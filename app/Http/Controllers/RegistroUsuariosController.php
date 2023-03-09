<?php

namespace App\Http\Controllers;

use App\Models\registroUsuarios;
use Illuminate\Http\Request;

class RegistroUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $datosUsuarios['usuarios']=registroUsuarios::paginate(10);
        return view('registroUsuarios.index',$datosUsuarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registroUsuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosUsuarios = request()->except('_token');
        registroUsuarios::insert($datosUsuarios);
        // return response()->json($datosUsuarios);

        return redirect('RegistroUsuarios')->with('mensaje','Usuario Agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(registroUsuarios $registroUsuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $datosUsuarios=registroUsuarios::findOrFail($id);
        return view('registroUsuarios.edit',compact('datosUsuarios'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosUsuarios = request()->except(['_token','_method']);
        registroUsuarios::where('id','=',$id)->update($datosUsuarios);

        $datosUsuarios=registroUsuarios::findOrFail($id);
        return view('registroUsuarios.edit',compact('datosUsuarios'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        registroUsuarios::destroy($id);
        return redirect('RegistroUsuarios')->with('mensaje','Usuario borrado con exito');;
    }
}
