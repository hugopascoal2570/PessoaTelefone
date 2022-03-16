@extends('adminlte::page')
@section('title', 'Pessoas')

@section('content_header')

    <h1>Lista de Pessoas </h1>
    <a href="{{ route('pessoas.create') }}" class="btn btn-sm btn-success">Adicionar Pessoas</a>
    <div class="container">
        <form action="{{ route('pessoas.index') }}" method="get" class="sidebar-form">
            <div class="input-group">

            </div>
        </form>
    </div>
@endsection
@section('content')

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Nacionalidade</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($pessoas as $pessoa)
                <tr>
                    <td>{{ $pessoa->nome }}</td>
                    <td>{{ $pessoa->data_nasc }}</td>
                    <td>{{ $pessoa->nacionalidade }}<br></td>

                </tr>
        </tbody>
        @endforeach
    </table>
    {{ $pessoas->links() }}
@endsection
