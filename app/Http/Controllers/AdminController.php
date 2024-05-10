<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chamado;
use App\Models\Situacao;

class AdminController extends Controller
{
    public function index() {
        $chamados = Chamado::all();
        $situacoes = Situacao::all();
        return view('admin.index', ['chamados' => $chamados, 'situacoes' => $situacoes]);
    }
}
