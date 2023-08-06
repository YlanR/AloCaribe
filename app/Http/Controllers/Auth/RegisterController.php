<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'apellido' => ['required', 'string', 'max:255'],
            'cedula' => ['required', 'integer'],
            'edad' => ['required', 'integer', 'max:255'],
            'instagram' => ['string', 'max:20']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $foto = request()->except('_token');
        if (request()->hasFile('foto')) {
            $foto['foto'] = request()->file('foto')->store('uploads', 'public');
            // Guardar la ruta en la base de datos o cualquier otro procesamiento necesario
        }

        

       $user = User::create([
            'name' => $data['name'],
            'apellido' => $data['apellido'],
            'cedula' => $data['cedula'],
            'edad' => $data['edad'],
            'email' => $data['email'],
            'instagram' => $data['id_instagram'],
            'foto' => $foto['foto'],
            'password' => Hash::make($data['password']),
        ]);

        return $user->assignRole('2');

    }
}
