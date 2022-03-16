@extends('adminlte::page')
@section('title', 'Alunos')

@section('content_header')

    <h1>Lista de Aluno</h1>
    <a href="{{ route('alunos.create') }}" class="btn btn-sm btn-success">Adicionar Aluno</a>
    <div class="container">
        <form action="{{ route('alunos.index') }}" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Procurar">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
    </div>
@endsection
@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Foto dos alunos</th>
                <th>Turma</th>
                <th>Responsável</th>
                <th>Telefone 1</th>
                <th>Telefone 2</th>
                <th></th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($students as $student)
                @foreach ($student->turmas as $results)
                    @foreach ($student->responsaveis as $responsaveis)
                        <tr>
                            <td>{{ $student->nameStudent }}</td>
                            <td><img src="{{ asset("storage/{$student->image}") }}" width="100px"></td>
                            <td>{{ $results['name'] }}</td>
                            <td>{{ $responsaveis['name'] }}</td>
                            <td>{{ $responsaveis['phone'] }}
                            <td>{{ $responsaveis['phone2'] }}
                            <td>

                            <td>
                                <a href="{{ route('alunos.edit', ['aluno' => $student->id]) }}"
                                    class="btn btn-sm btn-info">Editar</a>
                                <a href="{{ route('responsavels.edit', ['responsavel' => $responsaveis->id]) }}"
                                    class="btn btn-sm btn-success">Editar Responsavel</a>
                                <form class="d-inline" method="POST"
                                    action="{{ route('alunos.destroy', ['aluno' => $student->id]) }}"
                                    onsubmit="return confirm('tem certeza que deseja excluir?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
        </tbody>
        @endforeach
        @endforeach
        @endforeach
    </table>
    </div>
    </div>

@endsection
