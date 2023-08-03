<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Academy;

class AcademyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('usuario.registroAcademia');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $datos = request()->except('_token');

        // if($request->hasFile('foto')){
        //     $datos['foto'] = $request->file('foto')->store('uploads', 'public');
        // }

        // var_dump($datos);
        // die();

        // Academy::insert( $datos );
        // // return response()->json($datos);
        // return redirect('/')->with('mensaje', 'Academia agregada con exito');

        if ($request->hasFile('foto_academy')) {
            $foto = $request->file('foto_academy')->store('uploads', 'public');
            // Guardar la ruta en la base de datos o cualquier otro procesamiento necesario
        }
        $academia = new Academy;
        $academia->user_id= $request->input('user_id');
        $academia->name_academy= $request->input('name_academy');
        $academia->telefono= $request->input('telefono');
        $academia->estado= $request->input('estado');
        $academia->instagram= $request->input('instagram');
        $academia->foto_academy = $foto;
       

        $academia->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
