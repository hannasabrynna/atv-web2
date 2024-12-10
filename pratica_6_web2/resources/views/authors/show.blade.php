@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Detalhes do autor</h1>

    <div class="card">
        <div class="card-header">
            Categoria: {{ $author->name }},
            {{ $author->birth_date }}
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $author->id }}</p>
            <p><strong>Nome:</strong> {{ $author->name }}</p>
            <p><strong>Data Aniversario:</strong> {{ $author->birth_date }}</p>

        </div>
    </div>

    <a href="{{ route('authors.index') }}" class="btn btn-secondary mt-3">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>
@endsection

