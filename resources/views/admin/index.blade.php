@extends('layouts.default')

@section('title', 'Admin Panel')

@section('header')
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-red-500 rounded-full"
                    viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Admin Panel</span>
            </a>
            <nav
                class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-gray-900" href="{{ route('admin.index') }}">Home</a>
                <a class="mr-5 hover:text-gray-900" href="{{ route('categorias.index') }}">Categorias</a>
            </nav>
            <a href="{{ route('home') }}">
                <button
                    class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Usuário
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
            </a>
        </div>
    </header>
@endsection

@section('content')

    <div class="grid justify-items-center lg:w-2/3 w-full mx-auto overflow-auto items-center">

        <div class="flex flex-col text-center w-full mb-5">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Gerenciamento de chamados</h1>

            @if (session('msg'))
                <p class="mx-auto text-base pt-5">{{ session('msg') }}</p>
            @endif
        </div>

        <table class="table-auto w-full text-center whitespace-no-wrap">
            <thead>
                <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Titulo
                    </th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Descrição
                    </th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Prazo de
                        solução</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Data de
                        criação</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Data de
                        solução</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Categoria
                    </th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Situação
                    </th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Editar
                    </th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Deletar
                    </th>
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

                        <form method="post" action="{{ route('chamados.update', ['chamado' => $chamado]) }}">
                            @csrf
                            @method('put')

                            <td>
                                <div class="p-2 w-auto">
                                    <div class="relative">
                                        <select name="situacao_id"
                                            class="w-full bg-gray-100 rounded border appearance-none border-gray-300 py-2 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                                            @foreach ($situacoes as $situacao)
                                                <option value="{{ $situacao->id }}"
                                                    @if ($chamado->situacao_id == $situacao->id) selected @endif>
                                                    {{ $situacao->nome }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span
                                            class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4"
                                                viewBox="0 0 24 24">
                                                <path d="M6 9l6 6 6-6"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="submit" value="🔁" class=" bg-red-400 rounded-sm py-1 px-1 hover:bg-red-500" />
                            </td>
                        </form>

                        <td>
                            <form method="post" action="{{ route('chamados.destroy', ['chamado' => $chamado]) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="🗑"
                                    class=" bg-red-400 rounded-sm py-1 px-1 hover:bg-red-500" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
