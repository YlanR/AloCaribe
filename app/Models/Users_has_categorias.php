<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Categoria1;
use App\Models\Categoria2;
use App\Models\Categoria3;


class Users_has_categorias extends Model
{
    use HasFactory;

    public function categoria1(){
        return $this->belongsToMany(Categoria1::class, 'users_has_categorias');
    }

    public function categoria2(){
        return $this->belongsToMany(Categoria2::class, 'users_has_categorias');
    }

    public function categoria3(){
        return $this->belongsToMany(Categoria3::class, 'users_has_categorias');
    }
}
