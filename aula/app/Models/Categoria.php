<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria'; // Nome da tabela

    public $fillable = ['id_categoria', 'categoria']; //Nome dos atributos da tabela

    public $timestamps = false; //cria colunas automaticamente na tabela do banco, com data de cadastro e modificação, por exemplo,


}