<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Instagram;
use App\Models\Academy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\Categoria1;
use App\Models\Categoria2;
use App\Models\Categoria3;

use App\Models\Users_has_categorias;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $academy = Academy::where('user_id', Auth::user()->id)->first();
        return view('usuario.registroCompetidores', compact('academy'));
    }

    public function register(){
        
 
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
        //

        // $campos=[
        //     'Nombre' => 'required|string|max:100',
        //     'ApellidoPaterno' => 'required|string|max:100',
        //     'ApellidoMaterno' => 'required|string|max:100',
        //     'Correo' => 'required|email',
        //     'Foto' => 'required|max:10000|mimes:jpeg,png,jpg',
        // ];
        // $mensaje = [
        //     'required' => 'El :attribute es requirido',
        //     'Foto.required' => 'La foto es requerida'
        // ];

        // $this->validate($request, $campos,$mensaje);

        if ($request->hasFile('foto_competidor')) {
            $foto = $request->file('foto_competidor')->store('uploads', 'public');
            // Guardar la ruta en la base de datos o cualquier otro procesamiento necesario
        }

            

            // $instagram = new Instagram;
            // $instagram->name = $request->input('instagram');

            // $instagram->save();

            $competidor = new User;
            $competidor->name= $request->input('nombreC');
            $competidor->apellido= $request->input('apellidoC');
            $competidor->cedula= $request->input('cedula');
            $competidor->edad= $request->input('edad');
            $competidor->instagram= $request->input('instagram');;
            $competidor->foto = $foto;
        
            $competidor->save();

            $categoria = new Users_has_categorias;
            $categoria->user_id = $competidor->id;
            $categoria->categoria1_id = $request->input('categoria1');
            $categoria->categoria2_id = $request->input('categoria2');
            $categoria->categoria3_id = $request->input('categoria3');
            $categoria->academy_id = $request->input('academy_id');

            $categoria->save();


            

           
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
