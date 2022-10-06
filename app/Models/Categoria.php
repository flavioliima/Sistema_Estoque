<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'tb_categoria';
    protected $fillable = ['descricao', 'ativo'];
    public $timestamps = false;


}
