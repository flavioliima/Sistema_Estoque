<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    protected $table = 'tb_movimentacao';
    protected $fillable = ['id_produto', 'id_tipo_estoque', 'id_categoria', 'descricao', 'data_entrada', 'quantidade', 'valor_unitario', 'tipo_movimentacao', 'subtotal'];
    public $timestamps = false;

    public function produto()
    {
        return $this->belongsTo(Estoque::class, 'id_produto');
    }

    public function tipoEstoque()
    {
        return $this->belongsTo(TipoEstoque::class, 'id_tipo_estoque');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
