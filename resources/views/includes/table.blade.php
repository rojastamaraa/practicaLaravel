<div class="container">
    <br>
    <br>
    <a href="{{ $route }}">
        <button class="btn btn-primary">@yield('title')</button>
    </a>
    <br><br>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            @if ($route == route('products.create'))
            <th>Precio</th>
            @endif
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <tbody class="table-group-divider">
            @foreach ($obj as $obj2)
                <tr>
                    <td>{{ $obj2->id }}</td>
                    <td>{{ $obj2->name }}</td>
                    @if ($route == route('products.create'))
                    <td>{{ $obj2->price }}</td>
                    @endif
                    <td>
                        <a href="{{ route($type . '.edit', $obj2) }}">
                            <button class="btn btn-success">Editar</button>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route($type . '.destroy', $obj2) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
