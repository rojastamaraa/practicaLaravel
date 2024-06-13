@extends('layouts.layout')

@section('content')
@section('title', 'Subir marca')
@include('includes.table', ['obj' => $brands, 'route' => route('brands.create'), 'type' => 'brands'])
@endsection
