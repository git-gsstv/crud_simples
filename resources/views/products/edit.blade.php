<h1>Editar Produto</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome:</label>
    <input type="text" name="nome" value="{{ $product->nome }}"><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade" value="{{ $product->quantidade }}"><br>

    <label>Preço:</label>
    <input type="text" name="preco" value="{{ $product->preco }}"><br>

    <button type="submit">Atualizar</button>
</form>

<a href="{{ route('products.index') }}">Voltar</a>
