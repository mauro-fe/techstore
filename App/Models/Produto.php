<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $fillable = [
        'loja_id',
        'categoria_id',
        'sku',
        'nome',
        'slug',
        'descricao',
        'preco',
        'quantidade',
        'aceita_retirada',
        'shopee_url',
        'ativo'
    ];

    public $timestamps = true;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function loja()
    {
        return $this->belongsTo(Loja::class, 'loja_id');
    }

    public function pedidoItens()
    {
        return $this->hasMany(PedidoItem::class, 'produto_id');
    }
}
