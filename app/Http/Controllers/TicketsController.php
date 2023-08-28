<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Academy;
use App\Models\Pagos;
use App\Models\Tickets;


class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tickets = DB::table('pagos')
        ->join('tickets', 'pagos.ticket_id', '=', 'tickets.idt')
        ->join('academies', 'pagos.academy_id', '=', 'academies.id')
        ->select('pagos.*', 'tickets.*', 'academies.*')
        ->where('tickets.resultado', 'f')
        ->get();

        return view('usuario.validacionTicket', compact('tickets'));
    }

    public function indexValidados()
    {
        //
        $tickets = DB::table('pagos')
        ->join('tickets', 'pagos.ticket_id', '=', 'tickets.idt')
        ->join('academies', 'pagos.academy_id', '=', 'academies.id')
        ->select('pagos.*', 'tickets.*', 'academies.*')
        ->where('tickets.resultado', 't')
        ->get();

        return view('usuario.ticketsValidados', compact('tickets'));
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $tickets = DB::table('tickets')
        ->select('tickets.*')
        ->where('tickets.idt', $id)
        ->update(['resultado' => 't']);

        return back();
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
