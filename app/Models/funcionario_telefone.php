<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionario_telefone extends Model
{
    protected $table = 'funcionario_telefone';
    use HasFactory;
    protected $fillable = ['Funcionario','Telefone'];
}
