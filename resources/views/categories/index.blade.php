@extends('layouts.layout')

@section('content')
@section('title', 'Subir categoria')
@include('includes.table', ['obj' => $categories, 'route' => route('categories.create'), 'type' => 'categories'])
@endsection
