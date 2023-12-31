<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Academy;
use App\Models\Pagos;
use App\Models\Tickets;
use Illuminate\Support\Facades\Auth;

use Barryvdh\DomPDF\Facade\Pdf;
// use App\Mail\TicketMailable;
// use Illuminate\Support\Facades\Mail;

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

    public function ticketBuscar(Request $request)
    {
        //
        $tickets = DB::table('pagos')
        ->join('tickets', 'pagos.ticket_id', '=', 'tickets.idt')
        ->join('academies', 'pagos.academy_id', '=', 'academies.id')
        ->select('pagos.*', 'tickets.*', 'academies.*')
        ->where('tickets.resultado', 't')
        ->where('tickets.ticket', $request->input('ticketValidado'))
        ->get();

        return view('usuario.buscarTicket', compact('tickets'));
    }

    public function misTickets()
    {
        //

        $miUser = Auth::user()->id;

        $tickets = DB::table('pagos')
        ->join('tickets', 'pagos.ticket_id', '=', 'tickets.idt')
        ->join('academies', 'pagos.academy_id', '=', 'academies.id')
        ->select('pagos.*', 'tickets.*', 'academies.*')
        ->where('pagos.user_id', $miUser)
        ->get();

        $competidores = DB::table('categorias_users')
        ->join('users', 'categorias_users.user_id', '=', 'users.id')
        ->join('academies', 'categorias_users.academy_id', '=', 'academies.id')
        ->join('categoria1', 'categorias_users.categoria1_id', '=', 'categoria1.id')
        ->join('categoria2', 'categorias_users.categoria2_id', '=', 'categoria2.id')
        ->join('categorias', 'categorias_users.categorias_id', '=', 'categorias.id')
        ->join('tickets', 'categorias_users.ticket_id', '=', 'tickets.idt')
        ->select('categorias_users.*', 'users.*', 'academies.*', 'tickets.*', 'categoria1.*', 'categoria2.*', 'categorias.*')
        ->where('categorias_users.director_id', $miUser)
        ->get();

        return view('usuario.misTickets', compact('tickets', 'competidores'));
    }

    public function pdf(){

        
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
        $miUser = Auth::user()->id;

        $tickets = DB::table('pagos')
        ->join('tickets', 'pagos.ticket_id', '=', 'tickets.idt')
        ->join('academies', 'pagos.academy_id', '=', 'academies.id')
        ->select('pagos.*', 'tickets.*', 'academies.*')
        ->where('pagos.user_id', $miUser)
        ->where('pagos.idp', $id)
        ->get();

        $competidores = DB::table('categorias_users')
        ->join('users', 'categorias_users.user_id', '=', 'users.id')
        ->join('academies', 'categorias_users.academy_id', '=', 'academies.id')
        ->join('categoria1', 'categorias_users.categoria1_id', '=', 'categoria1.id')
        ->join('categoria2', 'categorias_users.categoria2_id', '=', 'categoria2.id')
        ->join('categorias', 'categorias_users.categorias_id', '=', 'categorias.id')
        ->join('tickets', 'categorias_users.ticket_id', '=', 'tickets.idt')
        ->select('categorias_users.*', 'users.*', 'academies.*', 'tickets.*', 'categoria1.*', 'categoria2.*', 'categorias.*')
        ->where('categorias_users.director_id', $miUser)
        ->get();
        set_time_limit(0);

        // $correo = new TicketMailable($tickets, $competidores);
        // Mail::to('ylanrizo@gmail.com')->send($correo);

        $pdf = Pdf::loadView('pdf.pdfTicket', compact('tickets', 'competidores'));
        return $pdf->stream();
        // return $pdf->download('ticketAloCaribe.pdf');

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

        return back()->with('validar', 'ok');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
