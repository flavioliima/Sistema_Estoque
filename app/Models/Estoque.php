<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Estoque extends Model
{
    protected $table = 'tb_estoque';
    protected $fillable = ['id_tipo_estoque', 'id_categoria','nome_produto', 'fornecedor', 'valor_unitario', 'data'];
    public $timestamps = false;

    public function tipoEstoque()
    {
        return $this->belongsTo(TipoEstoque::class, 'id_tipo_estoque');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
