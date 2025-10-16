<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = [
        'loja_id',
        'nome',
        'slug',
        'descricao',
        'icone',
    ];

    public $timestamps = true;

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'categoria_id');
    }

    public function loja()
    {
        return $this->belongsTo(Loja::class, 'loja_id');
    }
}
