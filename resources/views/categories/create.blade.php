@extends('layouts.layout')

@section('content')

@section('title', 'Subir categoria')
@include('/includes/form', ['route' => route('categories.store')])
@endsection
