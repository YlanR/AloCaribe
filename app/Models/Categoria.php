<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorias_users;


class Categoria extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany(User::class, 'Categorias_users');
    }
}
