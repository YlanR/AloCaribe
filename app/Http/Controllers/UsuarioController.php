<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pagos;
use App\Models\Instagram;
use App\Models\Academy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\Categoria1;
use App\Models\Categoria2;
use App\Models\Categorias;

use App\Models\Tickets;
use App\Models\Categorias_users;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $academy = Academy::where('user_id', Auth::user()->id)->first();

        if($academy == null){
            return redirect()->to('/academia/'.Auth::user()->id);
        }
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

        if ($request->hasFile('foto_competidor')) {
            $foto = $request->file('foto_competidor')->store('uploads', 'public');
            // Guardar la ruta en la base de datos o cualquier otro procesamiento necesario
        }

        $PagosP = $request->input('referenciaPago');
        $pagosExist = Pagos::where('referencia', $PagosP)->exists();
        $pagosExistent = Pagos::where('referencia', $PagosP)->first();

        $tickete = $request->input('ticket_id');
        $ticketsExist = Tickets::where('ticket', $tickete)->exists();
        $ticketsExistent = Tickets::where('ticket', $tickete)->first();


        // $instagram->save();
        $cedula = $request->input('cedula');
        $UserExist = User::where('cedula', $cedula)->exists();
        $UserExistent = User::where('cedula', $cedula)->first();


            $competidor = new User;
            $competidor->name= $request->input('name');
            $competidor->apellido= $request->input('apellido');
            $competidor->cedula= $request->input('cedula');
            $competidor->edad= $request->input('edad');
            $competidor->instagram= $request->input('instagram');

        if($request->input('referenciaPago')){    

            if($UserExist == null){
                
                $competidor->save();

                $ticket = new Tickets;
                $ticket->ticket = $request->input('ticket_id'); 
                $ticket->resultado = 'f';
                if($ticketsExist == null){
                    $ticket->save();
                    

                    $categoria = new Categorias_users;
                    $categoria->user_id = $competidor->id;
                    $categoria->categoria1_id = $request->input('categoria1');
                    $categoria->categoria2_id = $request->input('categoria2');
                    $categoria->categorias_id = $request->input('categoria3');
                    $categoria->academy_id = $request->input('academy_id');
                    $categoria->director_id = $request->input('director_id');
                    $categoria->ticket_id = $ticket->id;
                    
                    $categoria->save();

                    $pagos = new Pagos;
                    $pagos->user_id = $request->input('director_id');
                    $pagos->modalidad = $request->input('modalidad');
                    $pagos->telefono = $request->input('numeroTitular');
                    $pagos->nombrePago = $request->input('nombreTitular');
                    $pagos->referencia = $request->input('referenciaPago');
                    $pagos->total = $request->input('precio');
                    $pagos->academy_id = $request->input('academy_id');
                    $pagos->ticket_id = $ticket->id;

                    if($pagosExist == null){
                        $pagos->save();
                    }  else{
                        return response()->json('Todo listo');

                    }


                    return response()->json('Todo listo');

                }else{
     

                    $categoria = new Categorias_users;
                    $categoria->user_id = $competidor->id;
                    $categoria->categoria1_id = $request->input('categoria1');
                    $categoria->categoria2_id = $request->input('categoria2');
                    $categoria->categorias_id = $request->input('categoria3');
                    $categoria->academy_id = $request->input('academy_id');
                    $categoria->director_id = $request->input('director_id');
                    $categoria->ticket_id = $ticketsExistent->idt;
                    
                    $categoria->save();

                    
                    $pagos = new Pagos;
                    $pagos->user_id = $request->input('director_id');
                    $pagos->modalidad = $request->input('modalidad');
                    $pagos->telefono = $request->input('numeroTitular');
                    $pagos->nombrePago = $request->input('nombreTitular');
                    $pagos->referencia = $request->input('referenciaPago');
                    $pagos->total = $request->input('precio');
                    $pagos->academy_id = $request->input('academy_id');
                    $pagos->ticket_id = $ticketsExistent->id;

                    if($pagosExist == null){
                        $pagos->save();
                    } else{
                        return response()->json('Todo listo');

                    } 
                    return response()->json('Todo listo');

                }

            } else{
                
                $ticket = new Tickets;
                $ticket->ticket = $request->input('ticket_id'); 
                $ticket->resultado = 'f';
                if($ticketsExist == null){
                    $ticket->save();
                    

                    $categoria = new Categorias_users;
                    $categoria->user_id = $UserExistent->id;
                    $categoria->categoria1_id = $request->input('categoria1');
                    $categoria->categoria2_id = $request->input('categoria2');
                    $categoria->categorias_id = $request->input('categoria3');
                    $categoria->academy_id = $request->input('academy_id');
                    $categoria->director_id = $request->input('director_id');
                    $categoria->ticket_id = $ticket->id;
                    
                    $categoria->save();

                    $pagos = new Pagos;
                    $pagos->user_id = $request->input('director_id');
                    $pagos->modalidad = $request->input('modalidad');
                    $pagos->telefono = $request->input('numeroTitular');
                    $pagos->nombrePago = $request->input('nombreTitular');
                    $pagos->referencia = $request->input('referenciaPago');
                    $pagos->total = $request->input('precio');
                    $pagos->academy_id = $request->input('academy_id');
                    $pagos->ticket_id = $ticket->id;

                    if($pagosExist == null){
                        $pagos->save();
                    } else{
                        return response()->json('Todo listo');

                    }

                    return response()->json('Todo listo');

                }else{
     

                    $categoria = new Categorias_users;
                    $categoria->user_id = $UserExistent->id;
                    $categoria->categoria1_id = $request->input('categoria1');
                    $categoria->categoria2_id = $request->input('categoria2');
                    $categoria->categorias_id = $request->input('categoria3');
                    $categoria->academy_id = $request->input('academy_id');
                    $categoria->director_id = $request->input('director_id');
                    $categoria->ticket_id = $ticketsExistent->idt;
                    
                    $categoria->save();
                    
                    $pagos = new Pagos;
                    $pagos->user_id = $request->input('director_id');
                    $pagos->modalidad = $request->input('modalidad');
                    $pagos->telefono = $request->input('numeroTitular');
                    $pagos->nombrePago = $request->input('nombreTitular');
                    $pagos->referencia = $request->input('referenciaPago');
                    $pagos->total = $request->input('precio');
                    $pagos->academy_id = $request->input('academy_id');
                    $pagos->ticket_id = $ticketsExistent->id;

                    if($pagosExist == null){
                        $pagos->save();
                    } else{
                        return response()->json('Todo listo');

                    }

                    return response()->json('Todo listo');

                }

                // $categoria = new Categorias_users;
                // $categoria->user_id = $UserExistent->id;
                // $categoria->categoria1_id = $request->input('categoria1');
                // $categoria->categoria2_id = $request->input('categoria2');
                // $categoria->categorias_id = $request->input('categoria3');
                // $categoria->academy_id = $request->input('academy_id');
                // $categoria->director_id = $request->input('director_id');
                // $categoria->ticket_id = $ticket->id;

                // $categoria->save();
   
                
                return response()->json('Todo listo');

            }
        } else{

            if($UserExist == null){
                
                $competidor->save();

                $ticket = new Tickets;
                $ticket->ticket = $request->input('ticket_id'); 
                $ticket->resultado = 't';
                if($ticketsExist == null){
                    $ticket->save();
                    

                    $categoria = new Categorias_users;
                    $categoria->user_id = $competidor->id;
                    $categoria->categoria1_id = $request->input('categoria1');
                    $categoria->categoria2_id = $request->input('categoria2');
                    $categoria->categorias_id = $request->input('categoria3');
                    $categoria->academy_id = $request->input('academy_id');
                    $categoria->director_id = $request->input('director_id');
                    $categoria->ticket_id = $ticket->id;
                    
                    $categoria->save();

                    $pagos = new Pagos;
                    $pagos->user_id = $request->input('director_id');
                    $pagos->modalidad = $request->input('modalidad');
                    $pagos->telefono = $request->input('numeroTitular');
                    $pagos->nombrePago = $request->input('nombreTitular');
                    $pagos->cedula_pago = $request->input('referenciaCedulaPago');
                    $pagos->total = $request->input('precio');
                    $pagos->academy_id = $request->input('academy_id');
                    $pagos->ticket_id = $ticket->id;

                    if($pagosExist == null){
                        $pagos->save();
                    }  else{
                        return response()->json('Todo listo');

                    }


                    return response()->json('Todo listo');

                }else{
     

                    $categoria = new Categorias_users;
                    $categoria->user_id = $competidor->id;
                    $categoria->categoria1_id = $request->input('categoria1');
                    $categoria->categoria2_id = $request->input('categoria2');
                    $categoria->categorias_id = $request->input('categoria3');
                    $categoria->academy_id = $request->input('academy_id');
                    $categoria->director_id = $request->input('director_id');
                    $categoria->ticket_id = $ticketsExistent->idt;
                    
                    $categoria->save();

                    
                    $pagos = new Pagos;
                    $pagos->user_id = $request->input('director_id');
                    $pagos->modalidad = $request->input('modalidad');
                    $pagos->telefono = $request->input('numeroTitular');
                    $pagos->nombrePago = $request->input('nombreTitular');
                    $pagos->cedula_pago = $request->input('referenciaCedulaPago');
                    $pagos->total = $request->input('precio');
                    $pagos->academy_id = $request->input('academy_id');
                    $pagos->ticket_id = $ticketsExistent->id;

                    if($pagosExist == null){
                        $pagos->save();
                    } else{
                        return response()->json('Todo listo');

                    } 
                    return response()->json('Todo listo');

                }

            } else{
                
                $ticket = new Tickets;
                $ticket->ticket = $request->input('ticket_id'); 
                $ticket->resultado = 't';
                if($ticketsExist == null){
                    $ticket->save();
                    

                    $categoria = new Categorias_users;
                    $categoria->user_id = $UserExistent->id;
                    $categoria->categoria1_id = $request->input('categoria1');
                    $categoria->categoria2_id = $request->input('categoria2');
                    $categoria->categorias_id = $request->input('categoria3');
                    $categoria->academy_id = $request->input('academy_id');
                    $categoria->director_id = $request->input('director_id');
                    $categoria->ticket_id = $ticket->id;
                    
                    $categoria->save();

                    $pagos = new Pagos;
                    $pagos->user_id = $request->input('director_id');
                    $pagos->modalidad = $request->input('modalidad');
                    $pagos->telefono = $request->input('numeroTitular');
                    $pagos->nombrePago = $request->input('nombreTitular');
                    $pagos->cedula_pago = $request->input('referenciaCedulaPago');
                    $pagos->total = $request->input('precio');
                    $pagos->academy_id = $request->input('academy_id');
                    $pagos->ticket_id = $ticket->id;

                    if($pagosExist == null){
                        $pagos->save();
                    } else{
                        return response()->json('Todo listo');

                    }

                    return response()->json('Todo listo');

                }else{
     

                    $categoria = new Categorias_users;
                    $categoria->user_id = $UserExistent->id;
                    $categoria->categoria1_id = $request->input('categoria1');
                    $categoria->categoria2_id = $request->input('categoria2');
                    $categoria->categorias_id = $request->input('categoria3');
                    $categoria->academy_id = $request->input('academy_id');
                    $categoria->director_id = $request->input('director_id');
                    $categoria->ticket_id = $ticketsExistent->idt;
                    
                    $categoria->save();
                    
                    $pagos = new Pagos;
                    $pagos->user_id = $request->input('director_id');
                    $pagos->modalidad = $request->input('modalidad');
                    $pagos->telefono = $request->input('numeroTitular');
                    $pagos->nombrePago = $request->input('nombreTitular');
                    $pagos->cedula_pago = $request->input('referenciaCedulaPago');
                    $pagos->total = $request->input('precio');
                    $pagos->academy_id = $request->input('academy_id');
                    $pagos->ticket_id = $ticketsExistent->id;

                    if($pagosExist == null){
                        $pagos->save();
                    } else{
                        return response()->json('Todo listo');

                    }

                    return response()->json('Todo listo');

                }

                // $categoria = new Categorias_users;
                // $categoria->user_id = $UserExistent->id;
                // $categoria->categoria1_id = $request->input('categoria1');
                // $categoria->categoria2_id = $request->input('categoria2');
                // $categoria->categorias_id = $request->input('categoria3');
                // $categoria->academy_id = $request->input('academy_id');
                // $categoria->director_id = $request->input('director_id');
                // $categoria->ticket_id = $ticket->id;

                // $categoria->save();
   
                
            return response()->json('Todo listo');

            }

        }
            
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
