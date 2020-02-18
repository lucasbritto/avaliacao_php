<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome', 'cpf', 'rg','nascimento','telefone','cidade','user_cadastro','user_atualizacao',
    ];
}
