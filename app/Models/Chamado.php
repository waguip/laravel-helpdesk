<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 
        'descricao', 
        'prazo_solucao', 
        'data_criacao', 
        'data_solucao', 
        'categoria_id', 
        'situacao_id'
    ];

    public function categoria() {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }

    public function situacao() {
        return $this->belongsTo(Situacao::class);
    }
}
