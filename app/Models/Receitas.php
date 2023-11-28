<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receitas extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'valor', 'dia_pg', 'data_pg', 'user_id', 'receita_fixa', 'id_tipo_receita'];
    protected $table = "receitas";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo_despesa_receita::class);
    }

    public function status()
    {
        return $this->hasOne(Status::class);
    }
}
