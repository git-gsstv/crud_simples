<h1>Lista de Produtos</h1>
<div class="btn-new-container">
    <a href="{{ route('products.create') }}" class="btn-new">Novo Produto</a>
</div>

@if(session('success'))
    <p class="success-message">{{ session('success') }}</p>
@endif

<ul class="product-list">
    @foreach($products as $product)
        <li class="product-item">
            <span>{{ $product->nome }} - {{ $product->quantidade }} unidades - R$ {{ $product->preco }}</span>
            
            <div class="actions">
                <a href="{{ route('products.edit', $product->id) }}" class="btn-edit">Editar</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete">Excluir</button>
                </form>
            </div>
        </li>
    @endforeach
</ul>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f5f7fa;
        margin: 20px;
        color: #333;
    }

    h1 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    .btn-new-container {
        text-align: center;
        margin-bottom: 15px;
    }

    .btn-new {
        display: inline-block;
        padding: 10px 20px;
        background: #3498db;
        color: #fff;
        text-decoration: none;
        border-radius: 6px;
        font-weight: bold;
        transition: background 0.3s ease;
    }

    .btn-new:hover {
        background: #2980b9;
    }

    .success-message {
        color: #27ae60;
        font-weight: bold;
        margin-bottom: 15px;
        text-align: center;
    }

    .product-list {
        list-style: none;
        padding: 0;
        max-width: 600px;
        margin: auto;
    }

    .product-item {
        background: #fff;
        margin-bottom: 10px;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .actions {
        display: flex;
        gap: 10px;
    }

    .btn-edit,
    .btn-delete {
        width: 90px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        border-radius: 6px;
        font-size: 14px;
        font-weight: bold;
        transition: background 0.3s ease;
        display: inline-block;
        cursor: pointer;
        border: none;
    }

    .btn-edit {
        background: #f39c12;
        color: white;
        text-decoration: none;
    }

    .btn-edit:hover {
        background: #d68910;
    }

    .btn-delete {
        background: #e74c3c;
        color: white;
    }

    .btn-delete:hover {
        background: #c0392b;
    }

</style>
