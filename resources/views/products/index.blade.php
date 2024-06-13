 @extends('layouts.layout')

 @section('content')
 @section('title', 'Subir producto')
 @include('includes.table', ['obj' => $products, 'route' => route('products.create'), 'type' => 'products'])
@endsection
