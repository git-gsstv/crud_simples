<h1>Novo Produto</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="nome"><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade"><br>

    <label>Preço:</label>
    <input type="text" name="preco"><br>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('products.index') }}">Voltar</a>
