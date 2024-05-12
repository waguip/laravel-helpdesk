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

        $chamadosNoMes = Chamado::whereMonth('data_criacao', date('m'))->count();

        $chamadosFinalizadosAntesPrazo =
            Chamado::where('situacao_id', 3)            
            ->whereMonth('data_solucao', date('m'))            
            ->whereRaw('data_solucao <= prazo_solucao')            
            ->count()
        ;

        $percentualChamadosDentroPrazo = round(($chamadosNoMes > 0) ? ($chamadosFinalizadosAntesPrazo / $chamadosNoMes) * 100 : 0, 2);
            
        return view('index' , compact('chamadosTotal', 'categoriasTotal', 'chamadosFinalizados', 'percentualChamadosDentroPrazo'));
    }
}