<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class modelAgenda extends Model
{
    use HasFactory;// fatoração - dividir
    protected $table = 'registro';// npme da tabela do banco de dados
}// coloco apenas a tabela do banco de dados
