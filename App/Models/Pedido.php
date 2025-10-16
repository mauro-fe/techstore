<?php

// app/Models/Pedido.php
namespace App\Models;

class Pedido extends BaseModel
{
    protected $table = 'pedidos';
    public function itens()
    {
        return $this->hasMany(PedidoItem::class, 'pedido_id');
    }
}
