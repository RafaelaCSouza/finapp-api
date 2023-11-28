<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despesas extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'data', 'cartao', 'cartao_id', 'user_id', 'tipo_despesa_id', 'categoria_id'];
    protected $table = "despesas";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo_despesa_receita::class);
    }

    public function cartao()
    {
        return $this->belongsTo(Cartao::class);
    }
}
