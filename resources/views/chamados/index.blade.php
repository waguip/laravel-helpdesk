@extends('layouts.default')

@section('title', 'Chamados')

@section('content')

    <div class="grid justify-items-center lg:w-2/3 w-full mx-auto overflow-auto items-center">

        <a href="{{ route('chamados.create') }}">
            <button
                class="bg-gray-100 border-0 py-1 px-3 mb-8 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Novo
                Chamado
                </button>
        </a>

        <table class="table-auto w-full text-center whitespace-no-wrap">
            <thead>
                <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Titulo</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Descrição</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Prazo de solução</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Data de criação</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Data de solução</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Categoria</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Situação</th>                    
                </tr>
            </thead>
            <tbody>
                @foreach ($chamados as $chamado)
                    <tr>
                        <td class="px-4 py-3">{{ $chamado->titulo }}</td>
                        <td>{{ $chamado->descricao }}</td>
                        <td>{{ $chamado->prazo_solucao }}</td>
                        <td>{{ $chamado->data_criacao }}</td>
                        <td>{{ $chamado->data_solucao }}</td>
                        <td>{{ $chamado->categoria->nome }}</td>
                        <td>{{ $chamado->situacao->nome }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
