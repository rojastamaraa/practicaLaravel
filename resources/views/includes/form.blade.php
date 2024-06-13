@php
    use Illuminate\Support\Str;
@endphp

<form class="container-sm" action="{{ $route }}" method="POST">
    @csrf
    @if(isset($obj))
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
    @if (Str::contains(Route::currentRouteName(), 'categories'))
    <input type="text" class="form-control" placeholder="Id" name="parent_id" value="{{ isset($obj) ? $obj->parent_id : '' }}" required>
    @endif
    <br>
    <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ isset($obj) ? $obj->name : '' }}" required>
    <br>
    @if (Str::contains(Route::currentRouteName(), 'products'))
    <input type="text" class="form-control" placeholder="Precio" name="price" value="{{ isset($obj) ? $obj->price : '' }}" required>   
    @endif
    <br>
    <input type="submit" class="btn btn-success" name="" id="">
</form>
