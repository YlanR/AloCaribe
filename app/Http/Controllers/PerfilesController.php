<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Instagram;
use App\Models\Academy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PerfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user()->id;
        $academy = Academy::where('user_id', $user)->exists();
        $usuar = User::where('id', $user)->first();

        if($academy == null){
            return view('usuario.perfilDirector', compact('usuar', 'academy'));
        } else{
            $academy = Academy::where('user_id', $user)->first();
            return view('usuario.perfilDirector', compact('usuar', 'academy'));
        }
        
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
        // $academy = Academy::where('user_id', $id)->exists();
        $usuar = User::where('id', $id)->first();
        return view('usuario.editUser', compact('usuar'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $name = $request->input('name');
        $apellido = $request->input('apellido');
        $cedula = $request->input('cedula');
        $instagram = $request->input('id_instagram');
        $edad = $request->input('edad');
        $email = $request->input('email');

        $tickets = DB::table('users')
        ->select('users.*')
        ->where('users.id', $id)
        ->update(['name' => $name, 'apellido' => $apellido, 'cedula' => $cedula, 'edad' => $edad, 'instagram' => $instagram, 'email' => $email]);

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
