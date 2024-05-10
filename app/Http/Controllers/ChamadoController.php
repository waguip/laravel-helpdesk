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
            'categoria_id' => 'required|integer|exists:categorias,id'
        ], 
        [
            'titulo.required' => 'O campo título é obrigatório',
            'descricao.required' => 'O campo descrição é obrigatório',
            'categoria_id.required' => 'O campo categoria é obrigatório',
            'categoria_id.integer' => 'O campo categoria deve ser um número inteiro',
            'categoria_id.exists' => 'A categoria informada não existe'
        ]);
        
        $data['prazo_solucao'] = now()->addDays(3);
        $data['data_criacao'] = now();
        $data['situacao_id'] = 1;

        $newChamado = Chamado::create($data);
                    
        return redirect(route('chamados.index'));
    }

    public function destroy(Chamado $chamado) {
        $chamado->delete();
        return redirect(route('admin.index'))->with('msg', 'Chamado deletado com sucesso!');
    }    

    public function update(Request $request, Chamado $chamado) {
        $data = $request->validate([
            'situacao_id' => 'required|integer|exists:situacoes,id'
        ], 
        [
            'situacao_id.required' => 'O campo situação é obrigatório',
            'situacao_id.integer' => 'O campo situação deve ser um número inteiro',
            'situacao_id.exists' => 'A situação informada não existe'
        ]);
        
        if($data['situacao_id'] == 3) {
            $data['data_solucao'] = now();
        }

        $chamado->update($data);

        return redirect(route('admin.index'))->with('msg', 'Situação do chamado atualizada com sucesso!');
    }
}
