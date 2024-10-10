<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produto'; // Nome da tabela

    public $fillable = ['id_produto', 'id_categoria', 'id_fornecedor', 'produto', 'quantidade', 'preco', 'dataCadastro'];

    public $timestamps = false;
}
