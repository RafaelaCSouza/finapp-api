<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];
    protected $table = "categoria";

    public function despesas()
    {
        return $this->hasMany(Despesas::class);
    }
}
