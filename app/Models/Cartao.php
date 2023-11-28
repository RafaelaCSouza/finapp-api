<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'digitos', 'dia_vencimento', 'user_id'];
    protected $table = "cartao";

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
