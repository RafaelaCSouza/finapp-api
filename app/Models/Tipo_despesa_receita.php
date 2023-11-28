<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_despesa_receita extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];
    protected $table = "tipo_despesa_receita";

    public function receitas()
    {
        return $this->hasMany(Receitas::class);
    }

    public function despesas()
    {
        return $this->hasMany(Despesas::class);
    }
}
