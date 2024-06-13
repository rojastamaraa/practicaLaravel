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
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <!-- <div class="alert alert-danger" role="alert">
            El campo precio solo acepta valores numéricos
        </div> -->
    @endif
    <br>
    @if (Str::contains(Route::currentRouteName(), 'categories'))
    <input type="text" class="form-control" placeholder="Id" name="parent_id" value="{{ isset($obj) ? $obj->parent_id : '' }}">
    @endif
    <br>
    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre" name="name" value="{{  old('name') ?? (isset($obj) ? $obj->name : '') }}">
    <br>
    @if (Str::contains(Route::currentRouteName(), 'products'))
    <input type="text" class="form-control" placeholder="Precio" name="price" value="{{ isset($obj) ? $obj->price : '' }}">
    @endif
    <br>
    
    @foreach (App\Models\Category::all() as $category)
    <input type="checkbox" value="{{$category->id}}" name="category_id[]">{{$category->name}}
    @endforeach
    <br>
    <input type="submit" class="btn btn-success" name="" id="">
</form>