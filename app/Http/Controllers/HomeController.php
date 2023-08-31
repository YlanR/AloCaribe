<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Academy;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function contacto()
    {
        return view('contactos');
    }

    public function store(Request $request){

        $validacion = $request->validate([
            'nombre' => ['required'],
            'email' => ['required', 'email'],
            'mensaje' => ['required', 'min:8', 'max:300']
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('ylanrizo@gmail.com')->send($correo);

        return back()->with('mensaje', 'ok');
    }
}
