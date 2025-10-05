<h1>Editar Produto</h1>

@if ($errors->any())
    <div class="error-box">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST" class="form-container">
    @csrf
    @method('PUT')

    <label>Nome:</label>
    <input type="text" name="nome" value="{{ $product->nome }}"><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade" value="{{ $product->quantidade }}"><br>

    <label>Preço:</label>
    <input type="text" name="preco" value="{{ $product->preco }}"><br>

    <button type="submit" class="btn-update">Atualizar</button>
</form>

<a href="{{ route('products.index') }}" class="back-link">Voltar</a>


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

    .form-container {
        max-width: 400px;
        margin: auto;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
    }

    label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
    }

    .btn-update {
        margin-top: 15px;
        width: 100%;
        padding: 10px;
        background: #27ae60;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .btn-update:hover {
        background: #1e8449;
    }

    .error-box {
        max-width: 400px;
        margin: 10px auto;
        background: #ffe6e6;
        border: 1px solid #e74c3c;
        color: #c0392b;
        padding: 10px;
        border-radius: 6px;
    }

    .error-box ul {
        margin: 0;
        padding-left: 20px;
    }

    .back-link {
        display: block;
        text-align: center;
        margin-top: 15px;
        text-decoration: none;
        color: #3498db;
        font-weight: bold;
    }

    .back-link:hover {
        color: #2980b9;
        text-decoration: underline;
    }
</style>