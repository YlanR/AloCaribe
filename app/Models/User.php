<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

use App\Models\Academy;
use App\Models\Pagos;
use App\Models\Categoria;
use App\Models\Categorias_users;





class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'apellido',
        'cedula',
        'edad',
        'instagram',
        'foto',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    
    public function academy(){
        return $this->hasMany(Academy::class,'Categorias_users');
    }

    public function pagos(){
        return $this->hasMany(Pagos::class, 'user_id');
    }

    public function competencias(){
        return $this->belongsToMany(Categorias_users::class);
    }

    public function categoria1(){
        return $this->belongsToMany(Categoria1::class, 'Categorias_users');
    }

    public function categoria2(){
        return $this->belongsToMany(Categoria2::class, 'Categorias_users', 'user_id', 'categoria_id');
    }

    public function categoria(){
        return $this->belongsToMany(Categoria::class, 'Categorias_users');
    }

    
}
