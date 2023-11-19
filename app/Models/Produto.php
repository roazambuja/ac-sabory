<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos'; // Especifique o nome da tabela

    protected $fillable = [
        'nome',
        'valor',
        'quantidade',
        'descricao',
        // Outros campos, se houver
    ];
}
