<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produtos";

    protected $primaryKey = "codigo";
    
    protected $fillable = ['codigo', 'descricao', 'resumo', 'preco', 'created_at', 'updated_at',
    'cod_cor','cod_categoria'];  

    public function cores()
    {
        return $this->belongsTo(Cor::class);
    }

    public function categorias()
    {
        return $this->belongsTo(Categoria::class);
    }
}
