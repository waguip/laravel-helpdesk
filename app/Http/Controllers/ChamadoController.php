<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Chamado;
use App\Models\Categoria;

class ChamadoController extends Controller
{
    public function index() {
        $chamados = Chamado::all();
        return view('chamados.index', ['chamados' => $chamados]);
    }

    public function create() {
        $categorias = Categoria::all();        
        return view('chamados.create', ['categorias' => $categorias]);
    }

    public function store(Request $request) {        

        $data = $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'categoria_id' => 'required'
        ]);
        
        $data['prazo_solucao'] = now()->addDays(3);
        $data['data_criacao'] = now();
        $data['situacao_id'] = 1;

        $newChamado = Chamado::create($data);
                    
        return redirect(route('chamados.index'));
    }

    public function destroy(Chamado $chamado) {
        $chamado->delete();
        return redirect(route('chamados.index'))->with('msg', 'Chamado deletado com sucesso!');;
    }
}
