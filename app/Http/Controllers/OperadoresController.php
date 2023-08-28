<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias_users;
use App\Models\User;
use App\Models\Academy;
use Illuminate\Support\Facades\DB;


class OperadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        // $competidoress = new Categorias_users();
        // $competidoress->relacionTablas();

        // $competidores = DB::table('categorias_users')
        // ->join('users', 'categorias_users.user_id', '=', 'users.id')
        // ->join('academies', 'categorias_users.academy_id', '=', 'academies.id')
        // ->select('categorias_users.*', 'users.*', 'academies.*')
        // ->get();

        $competidores = DB::table('categorias_users')
        ->join('users', 'categorias_users.user_id', '=', 'users.id')
        ->join('academies', 'categorias_users.academy_id', '=', 'academies.id')
        ->join('categoria1', 'categorias_users.categoria1_id', '=', 'categoria1.id')
        ->join('categoria2', 'categorias_users.categoria2_id', '=', 'categoria2.id')
        ->join('categorias', 'categorias_users.categorias_id', '=', 'categorias.id')
        ->join('tickets', 'categorias_users.ticket_id', '=', 'tickets.idt')

        ->select('categorias_users.*', 'users.*', 'academies.*', 'tickets.*')
        ->where('categorias_users.categoria1_id', $request->input('categoria1'))
        ->where('categorias_users.categoria2_id', $request->input('categoria2'))
        ->where('categorias_users.categorias_id', $request->input('categoria3'))
        ->where('tickets.resultado', 't')

        // var_dump($request->input('categoria2'));
        // die();

        ->get();



        return view('usuario.listaCompetidores', compact('competidores'));


    }

    public function filter(Request $request){

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
        
        $competidores = DB::table('categorias_users')
        ->join('users', 'categorias_users.user_id', '=', 'users.id')
        ->join('academies', 'categorias_users.academy_id', '=', 'academies.id')
        ->select('categorias_users.*', 'users.*', 'academies.*');
        if($request){
            $competidores->where('categorias_users.categoria1_id', $request->input('categoria1'))
            ->where('categorias_users.categoria2_id', $request->input('categoria2'))
            ->where('categorias_users.categoria_id', $request->input('categoria3'));
        }
            // var_dump($request->input('categoria3'));
        $competidores->get();

        return view('usuario.listaCompetidores', compact('competidores'));

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
