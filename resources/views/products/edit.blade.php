@extends('layouts.layout')

@section('content')

@section('title', 'Editar producto')
@include('/includes/form', ['route' => route('products.update', $product), 'obj' => $product])

@endsection
