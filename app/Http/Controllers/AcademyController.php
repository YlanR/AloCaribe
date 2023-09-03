<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use App\Models\Academy;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Instagram;

class AcademyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //


       
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

        $validacion = $request->validate([
            'instagram' => ['required', 'max:30'],
            'name_academy' => ['required', 'string', 'max:30', 'unique:academies'],
            'telefono' => ['required', 'string', 'min:8', 'max:20'],
            'estado' => ['required'],
            'foto_academy' => [
                    'required', 'mimes:jpg,jpeg,png'
                ],
        ]);

        if ($request->hasFile('foto_academy')) {
            $foto = $request->file('foto_academy')->store('uploads', 'public');
            // Guardar la ruta en la base de datos o cualquier otro procesamiento necesario
        } else{
            $foto = null;
        }

        $academyExist = Academy::where('instagram_id', $request->input('instagram'))->exists();

        if($academyExist == null){
            $instagram = new Instagram;
            $instagram->name = $request->input('instagram');

            $instagram->save();

            $academia = new Academy;
            $academia->user_id= $request->input('user_id');
            $academia->instagram_id= $instagram->id;
            $academia->name_academy= $request->input('name_academy');
            $academia->telefono_academy= $request->input('telefono');
            $academia->estado= $request->input('estado');
            $academia->foto_academy = $foto;
        
            $academia->save();
           
            return redirect()->back()->with('registrarAca', 'ok');
        } else{
            return redirect()->back()->with('registrarAca', 'none');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $user = Auth::user()->id;
        $academyExist = Academy::where('user_id', $user)->exists();
        $academy = Academy::where('user_id', $user)->first();
        $usuar = User::where('id', $user)->first();

        if($academyExist == null){
            return view('usuario.registroAcademia');
        } else{
            $instagram = Instagram::where('id', $academy->instagram_id)->first();

            return view('usuario.perfilAcademia', compact('academy', 'usuar', 'instagram'));
        }
        
    }

    public function perfilOp(string $id)
    {
        //

        $user = $id;
        $academy = Academy::where('id', $user)->first();
        $usuar = User::where('id', $academy->user_id)->first();

       
            $instagram = Instagram::where('id', $academy->instagram_id)->first();

            return view('usuario.perfilAcademia', compact('academy', 'usuar', 'instagram'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        
        $user = Auth::user()->id;
        $academyExist = Academy::where('user_id', $user)->exists();
        $academy = Academy::where('user_id', $user)->first();
        $usuar = User::where('id', $user)->first();

        $instagram = Instagram::where('id', $academy->instagram_id)->first();

        return view('usuario.editAcademy', compact('academy', 'usuar', 'instagram'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $name = $request->input('name_academy');
        $telefono = $request->input('telefono_academy');
        $estado = $request->input('estado');
        $instagram = $request->input('instagram_id');

        $academia = DB::table('academies')
        ->select('academies.*')
        ->where('academies.user_id', $id)
        ->update(['name_academy' => $name, 'telefono_academy' => $telefono, 'estado' => $estado]);

        $instagramDB = DB::table('instagrams')
        ->join('academies', 'instagrams.id', '=', 'academies.instagram_id')
        ->select('instagrams.*', 'academies.*')
        ->where('academies.user_id', $id)
        ->update(['instagrams.name' => $instagram]);

        return redirect('/perfil/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
