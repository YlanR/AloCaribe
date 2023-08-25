<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;


class Academy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_academy',
        'telefono',
        'estado',
        'foto_academy'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'Categorias_users', 'user_id');
    }

    public function instagram(){
        return $this->hasOne(Instagram::class, 'instagram_id');
    }
}
