  @include('/layouts/head');
  <div class="container">
      <br>
      <br>
      <a href="{{ route('products.create') }}">
          <button class="btn btn-primary">Subir producto</button>
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
              <th>Precio</th>
              <th>Editar</th>
              <th>Eliminar</th>
          </tr>
          <tbody class="table-group-divider">
              @foreach ($products as $product)
                  <tr>
                      <td>{{ $product->id }}</td>
                      <td>{{ $product->name }}</td>
                      <td>{{ $product->price }}</td>
                      <td>
                          <a href="{{ route('products.edit', $product) }}">
                              <button class="btn btn-success">Editar</button>
                          </a>
                      </td>
                      <td>
                          <form action="{{ route('products.destroy', $product) }}" method="POST">
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
