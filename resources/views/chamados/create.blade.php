<div>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('chamados.store') }}" method="post">
        @csrf
        @method('post')
        <input type="text" name="titulo" placeholder="Título">
        <input type="text" name="descricao" placeholder="Descrição">        
        <select name="categoria_id">
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @endforeach
        </select>
        <button type="submit">Salvar</button>
    </form>
</div>
