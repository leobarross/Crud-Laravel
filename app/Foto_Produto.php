<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto_Produto extends Model
{
    protected $table = 'foto_produtos';
    protected $primaryKey = "codigo"; 
    protected $fillable = [
        'codigo', 'codproduto', 'foto', 'created_at', 'updated_at'
    ];  

    public function produtos()
    {
        return $this->belongsTo(Produto::class, 'codigo');
    }
}
