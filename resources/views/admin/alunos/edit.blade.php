@extends('layouts.app')
@extends('adminlte::page')

@section('title', 'Editar Aluno')

@section('content_header')
    <h1>Editar Aluno</h1>
@endsection
@section('script')
    <script>
        jQuery(document).ready(function() {
            $('.phone').mask.mask('(00) 00000-0000');
        });
        jQuery(document).ready(function() {
        $('.cpf').mask('000.000.000-00');
        });
        });
    </script>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('alunos.update', ['aluno' => $students->id]) }}" method="POST" class="form-horizontal">
                @method('PUT')
                @csrf
                @include('admin.includes.alerts')
                <label>Foto atual do aluno</label>
                <br><img src="{{ asset('storage/' . $students->image) }}" width="130px" height="100px" />
                <br /><br><label>Nova Foto do Aluno</label>
                <input type="file" id="image" name="image" class="from-control-file">
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Nome do aluno</label>
                    <div class="col-sm-4">
                        <input type="text" name="nameStudent" id="nameStudent" value="{{ $students->nome }}"
                            class="form-control @error('nameStudent') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">idade</label>
                    <div class="col-sm-4">
                        <input type="text" name="age" id="age" value="{{ $students->idade }}"
                            class="form-control @error('agt') is-invalid @enderror">
                    </div>
                </div>

                <label>Sexo do Aluno</label>
                <div class="form-group row">
                    <label>Masculino</label>
                    <input type="radio" id="sexo" value="masculino" name="sexo" class="from-control">
                </div>
                <div class="form-group row">
                    <label>Feminino</label>
                    <input type="radio" id="sexo" value="feminino" name="sexo" class="from-control">
                </div>
                <br />
                <br />
                <label>Só clique abaixo se deseja ativar/desativar alguma opção </label><br />
                <div class="col-sm-4">
                    <label>Ano da matricula </label>
                    <select class="form-control col-sm-4" name="ano_matricula" required>
                        <option class="col-sm-4" value="2021" selected>2021</option>
                        <option value="2022">2022</option>
                        <option value="2022">2023</option>
                    </select>
                </div>
                <label>Turma </label>
                <select class="form-control col-sm-4" name="turma_id" required>
                    @foreach ($classes as $turma)
                        <option value="{{ $turma->id }}">{{ $turma->name }}</option>
                    @endforeach
                </select>
        </div>
        <div class="col-sm-4">
            <label>Deseja ativar matricula?</label>
            <br /><select class="form-control col-sm-4" name="ativo" required>
                <option value="1" selected>Ativar</option>
                <option value="0">Desativar</option>
            </select>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-from-label"></label>
            <input type="submit" value="cadastrar" class="btn btn-success">
        </div>
    </div>
    </div>
    </form>
    </div>
    </div>
@endsection
