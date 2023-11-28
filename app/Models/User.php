<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['nome', 'cpf', 'email'];
    protected $table = "user";

    public function UserAuthenticate()
    {
        return $this->hasOne(User_authenticate::class);
    }

    public function cartao()
    {
        return $this->hasMany(Cartao::class);
    }

    public function receitas()
    {
        return $this->hasMany(Receitas::class);
    }

    public function despesas()
    {
        return $this->hasMany(Despesas::class);
    }
}
