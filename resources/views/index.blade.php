@extends('layouts.default')

@section('content')
    <section class="text-gray-600 body-font text-center">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 mt-10 text-gray-900">Métricas da plataforma</h1>
        <div class="flex flex-col text-center w-full mb-20">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4 text-center justify-around">
                    <div class="p-4 sm:w-1/4 w-1/2 border-2 rounded-lg">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">2.7K</h2>
                        <p class="leading-relaxed">Chamados</p>
                    </div>
                    <div class="p-4 sm:w-1/4 w-1/2 border-2 rounded-lg">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">1.8K</h2>
                        <p class="leading-relaxed">Resolvidos</p>
                    </div>
                    <div class="p-4 sm:w-1/4 w-1/2 border-2 rounded-lg">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">35</h2>
                        <p class="leading-relaxed">Categorias</p>
                    </div>
                </div>
            </div>
    </section>
@endsection
