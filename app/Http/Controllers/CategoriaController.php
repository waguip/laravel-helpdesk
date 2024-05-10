<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index() {
        $categorias = Categoria::all();
        return view('categorias.index', ['categorias' => $categorias]);
    }

    public function store(Request $request) {        

        $data = $request->validate([
            'nome' => 'required',            
        ], 
        [
            'nome.required' => 'O campo nome é obrigatório',            
        ]);
        
        $newCategoria = Categoria::create($data);
        return redirect(route('categorias.index'));
    }

    public function destroy(Categoria $categoria) {
        $categoria->delete();
        return redirect(route('categorias.index'))->with('msg', 'Categoria deletada com sucesso!');
    }
}
