<?php

// app/Models/PedidoItem.php
namespace App\Models;

class PedidoItem extends BaseModel
{
    protected $table = 'pedido_itens';
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'produto_id');
    }
}
