@extends('layouts.layout')

@section('content')

@section('title', 'Subir producto')
@include('/includes/form', ['action' => route('products.store')])
@endsection
