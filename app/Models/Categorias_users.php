<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\User;

use App\Models\Categoria1;
use App\Models\Categoria2;
use App\Models\Categoria;
use App\Models\Academy;

use App\Models\Tickets;


class Categorias_users extends Model
{
    use HasFactory;

    public function user(): BelongsToMany{
        return $this->belongsToMany(User::class, 'users','id');
    }

    public function categoria1(){
        return $this->belongsToMany(Categoria1::class, 'Categorias_users')->withPivot('name');
    }

    public function categoria2(){
        return $this->belongsToMany(Categoria2::class, 'Categorias_users')->withPivot('name');
    }

    public function categorias(){
        return $this->belongsToMany(Categoria::class, 'Categorias_users')->withPivot('name');
    }

    public function tickets(){
        return $this->belongsToMany(Tickets::class);
    }

    public function academy(){
        return $this->belongsToMany(Academy::class, 'academies', 'academy_id', 'id');
    }

    // public function relacionTablas(){
    //     return DB::table('categorias_users')
    //     ->join('users', 'categorias_users.user_id', '=', 'users.id')
    //     ->join('academies', 'categorias_users.academy_id', '=', 'academies.id')
    //     ->select('categorias_users.*', 'users.*', 'academies.*');
    // }
}
