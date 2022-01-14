@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

Tela de produtos
    
    @if($busca != "")
    <p>O usuário está buscando por {{$busca}}</p>
    @endif

@endsection