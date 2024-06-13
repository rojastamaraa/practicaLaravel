@extends('layouts.layout')

@section('content')

@section('title', 'Editar categoria')
@include('/includes/form', ['route' => route('categories.update', $category), 'obj' => $category])

@endsection
