@extends('layouts.layout')

@section('content')

@section('title', 'Editar producto')
@include('/includes/form', ['action' => route('products.update', $product), 'product' => $product])

@endsection
