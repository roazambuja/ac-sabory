<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos'; // Especifique o nome da tabela

    protected $fillable = [
        'id',
        'produto_id',
        'status',
        'observacao'
    ];
}
