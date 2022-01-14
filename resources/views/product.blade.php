@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    @if(!empty($id))
    <p>Exibindo Produto id: {{$id}}</p>
    @else
    <p>Insira um valor na URL</p>
    @endif

@endsection