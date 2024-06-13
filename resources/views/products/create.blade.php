@extends('layouts.layout')

@section('content')

@section('title', 'Subir producto')
@include('/includes/form', ['route' => route('products.store')])
@endsection
