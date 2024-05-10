<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Situacao extends Model
{
    use HasFactory;

    protected $table = 'situacoes';

    protected $fillable = [
        'nome'
    ];

    public function chamados() {
        return $this->hasMany(Chamado::class, 'situacao_id', 'id');
    }
}
