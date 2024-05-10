@extends('layouts.default')

@section('title', 'Criar Chamado')

@section('content')

    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Criar novo chamado</h1>
            </div>
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <form action="{{ route('chamados.store') }}" method="post">
                    @csrf
                    @method('post')
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="titulo" class="leading-7 text-sm text-gray-600">Título</label>
                                <input type="text" name="titulo"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <p class="mx-auto text-base">
                                        @error('titulo')
                                            {{ $message }}
                                        @enderror
                                    </p>
                            </div>
                        </div>

                        <div class="p-2 w-1/2">
                            <span class="leading-7 text-sm mr-3 text-gray-600">Categoria</span>
                            <div class="relative">
                                <select name="categoria_id"
                                    class="w-full bg-gray-100 rounded border appearance-none border-gray-300 py-2 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                    @endforeach
                                </select>
                                <span
                                    class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                                <p class="mx-auto text-base">
                                    @error('categoria_id')
                                        {{ $message }}
                                    @enderror
                                </p>
                            </div>
                        </div>

                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="descricao" class="leading-7 text-sm text-gray-600">Descrição</label>
                                <textarea name="descricao" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                <p class="mx-auto text-base">
                                    @error('descricao')
                                        {{ $message }}
                                    @enderror
                                </p>
                            </div>
                        </div>

                        <div class="p-2 w-full">
                            <button type="submit"
                                class="flex mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">Criar</button>
                        </div>
                    </div>
                </form>
            </div>            
        </div>
    </section>

@endsection
