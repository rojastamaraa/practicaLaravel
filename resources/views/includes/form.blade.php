<form class="container-sm" action="{{ isset($product) ? route('products.update', $product) : route('products.store') }}" method="POST">
    @csrf
    @if(isset($product))
        @method('PUT')
    @endif
    <h3>@yield('title')</h3>
    <br>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            El campo precio solo acepta valores numéricos
        </div>
    @endif
    <br>
    <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ isset($product) ? $product->name : '' }}" required>
    <br>
    <input type="text" class="form-control" placeholder="Precio" name="price" value="{{ isset($product) ? $product->price : '' }}" required>
    <br>
    <input type="submit" class="btn btn-success" name="" id="">
</form>
