<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cor extends Model
{
    protected $table = "cores";
    protected $primaryKey = "codigo";
    protected $fillable = ['codigo', 'descricao', 'created_at', 'updated_at'];
}
