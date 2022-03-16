@extends('adminlte::page')
@section('title', 'telefone')

@section('content_header')

    <h1>Lista de telefones </h1>
    <a href="{{ route('telefones.create') }}" class="btn btn-sm btn-success">Adicionar telefone</a>
    <div class="container">
        <form action="{{ route('telefones.index') }}" method="get" class="sidebar-form">
            <div class="input-group">

            </div>
        </form>
    </div>
@endsection
@section('content')

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Pessoa</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pessoas as $pessoa)
                @foreach ($pessoa->telefones as $telefone)
                    <td>{{ $pessoa->nome }}</td>
                    <td>{{ $telefone->telefone }}</td>


                    </tr>
        </tbody>
        @endforeach
        @endforeach
    </table>
    {{ $pessoas->links() }}
@endsection
