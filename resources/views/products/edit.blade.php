<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        form.container-sm {
            margin-top: 100px;
            width: 500px;
        }
    </style>
</head>

<form class="container-sm" action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    <h3>Editar producto</h3>
    <br>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            El campo precio solo acepta valores numericos
        </div>
    @endif
    <br>
    <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ $product->name }}" required>
    <br>
    <input type="text" class="form-control" placeholder="Precio" name="price" value="{{ $product->price }}"
        required>
    <br>
    <input type="submit" class="btn btn-success" name="" id="">
</form>
