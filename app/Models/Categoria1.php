<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Categorias_users;


class Categoria1 extends Model
{
    use HasFactory;

    public function competidores(){
        return $this->belongsToMany(Categorias_users::class, 'Categorias_users');
    }
}
