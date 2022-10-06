<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEstoque extends Model
{
    protected $table = 'tb_tipo_estoque';
    protected $fillable = ['descricao', 'ativo'];
    public $timestamps = false;

}
