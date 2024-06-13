@extends('layouts.layout')

@section('content')

@section('title', 'Subir Marca')
@include('/includes/form', ['route' => route('brands.store')])
@endsection
