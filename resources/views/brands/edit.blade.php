@extends('layouts.layout')

@section('content')

@section('title', 'Editar marca')
@include('/includes/form', ['route' => route('brands.update', $brand), 'obj' => $brand])

@endsection
