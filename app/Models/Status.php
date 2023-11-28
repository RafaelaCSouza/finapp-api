<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = ['mes', 'ano', 'status', 'datecreate', 'receita_id'];
    protected $table = "status";

    public function receitas()
    {
        return $this->belongsTo(Receitas::class);
    }

}
