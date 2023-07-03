<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";
    protected $primaryKey = "codigo";
    protected $fillable = ['codigo', 'descricao', 'created_at', 'updated_at'];
}


