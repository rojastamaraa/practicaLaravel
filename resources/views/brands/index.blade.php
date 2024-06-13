@extends('layouts.layout')

@section('title', 'Subir marca')

@section('content')    
    @include('includes.table', ['obj' => $brands, 'route' => route('brands.create'), 'type' => 'brands'])
@endsection