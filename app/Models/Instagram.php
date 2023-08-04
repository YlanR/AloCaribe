<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Academy;

class Instagram extends Model
{
    use HasFactory;

    public function academy(){
        return $this->belongsTo(Academy::class);
    }
}
