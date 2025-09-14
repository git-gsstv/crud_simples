<h1>Lista de Produtos</h1>
<a href="{{ route('products.create') }}">Novo Produto</a>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<ul>
    @foreach($products as $product)
        <li>
            {{ $product->nome }} - {{ $product->quantidade }} unidades - R$ {{ $product->preco }}
            <a href="{{ route('products.edit', $product->id) }}">Editar</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </li>
    @endforeach
</ul>