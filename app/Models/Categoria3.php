<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users_has_categorias;


class Categoria3 extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany(Users_has_categorias::class, 'users_has_categorias');
    }
}
