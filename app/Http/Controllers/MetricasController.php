<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Chamado;
use App\Models\Categoria;

class MetricasController extends Controller
{
    public function index() {

        $chamadosTotal = Chamado::count();
        $categoriasTotal = Categoria::count();        
        $chamadosFinalizados = Chamado::where('situacao_id', 3)->count();

        $chamadosFinalizadosAntesPrazo = Chamado::where('situacao_id', 3)
            ->whereDate('data_solucao', '>', 'prazo_solucao')
            ->whereMonth('data_solucao', '=', date('m'))
            ->count();

        $percentualChamadosDentroPrazo = ($chamadosFinalizados > 0) ? ($chamadosFinalizadosAntesPrazo / $chamadosFinalizados) * 100 : 0;

        return view('index' , compact('chamadosTotal', 'categoriasTotal', 'chamadosFinalizados', 'percentualChamadosDentroPrazo'));
    }
}