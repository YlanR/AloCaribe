<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

use App\Models\Categoria1;
use App\Models\Categoria2;
use App\Models\Categoria3;

use App\Models\Academy;
use App\Models\Pagos;




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

    public function categoria1(){
        return $this->belongsToMany(Categoria1::class, 'users_has_categorias');
    }

    public function categoria2(){
        return $this->belongsToMany(Categoria2::class, 'users_has_categorias');
    }

    public function categoria3(){
        return $this->belongsToMany(Categoria3::class, 'users_has_categorias');
    }
    
    public function academy(){
        return $this->hasMany(Academy::class, 'id');
    }

    public function pagos(){
        return $this->hasMany(Pagos::class, 'user_id');
    }
}
