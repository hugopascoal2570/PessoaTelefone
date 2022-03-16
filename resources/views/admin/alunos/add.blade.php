@extends('layouts.app')
@extends('adminlte::page')

@section('title', 'Novo Aluno(a)')

@section('content_header')
    <h1>Novo Aluno(a)</h1>
@endsection
@section('script')
    <script>
        jQuery(document).ready(function() {
            $('.phone').mask.mask('(00) 00000-0000');
        });
    </script>
@endsection
@section('content')

    <div class="card">
        @include('admin.includes.alerts')
        <div class="card-body">
            <form action="{{ route('alunos.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label>Foto do Aluno</label>
                    <input type="file" id="image" name="image" class="from-control-file">
                </div>
                <br />
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Nome do Aluno</label>
                    <div class="col-sm-3">
                        <input type="text" name="nameStudent" id="nameStudent"
                            class="form-control @error('nameStudent') is-invalid @enderror">
                    </div>
                    <label class="col-sm-1 col-from-label">Idade</label>
                    <div class="col-sm-2">
                        <input type="text" name="age" id="age" class="form-control @error('age') is-invalid @enderror">
                    </div>
                </div>

                <label>Sexo do Aluno</label>
                <div class="form-group row">
                    <label>Masculino</label>
                    <input type="radio" id="sex" value="masculino" name="sex" class="from-control">
                </div>
                <div class="form-group row">
                    <label>Feminino</label>
                    <input type="radio" id="sex" value="feminino" name="sex" class="from-control">
                </div>
                <br />
                <h4>Responsáveis</h4>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Nome do Responsável</label>
                    <div class="col-sm-3">
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
                    </div>
                    <label class="col-sm-1 col-from-label">CPF</label>
                    <div class="col-sm-2">
                        <input type="text" name="cpf" id="cpf" data-mask="000.000.000-00"
                            class="form-control @error('cpf') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">email</label>
                    <div class="col-sm-6">
                        <input type="text" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Telefone</label>
                    <div class="col-sm-3">
                        <input type="text" name="phone" id="phone" data-mask="(00) 0000-00000"
                            class="form-control @error('phone') is-invalid @enderror">
                    </div>
                    <label class="col-sm-1 col-from-label">Telefone 2</label>
                    <div class="col-sm-2">
                        <input type="text" name="phone2" id="phone2" data-mask="(00) 0000-00000"
                            class="form-control @error('phone2') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Endereço</label>
                    <div class="col-sm-3">
                        <input type="text" name="address" id="address"
                            class="form-control @error('address') is-invalid @enderror">
                    </div>
                    <label class="col-sm-1 col-from-label">Número</label>
                    <div class="col-sm-2">
                        <input type="text" name="number" id="number" maxlength="5"
                            class="form-control @error('number') is-invalid @enderror">
                    </div>
                </div>

                <div class="col-sm-4">
                    <label>Ano da matricula </label>
                    <select class="form-control col-sm-4" name="yearRegistration" required>
                        <option class="col-sm-4" value="2021" selected>2021</option>
                        <option value="2022">2022</option>
                        <option value="2022">2023</option>
                    </select>

                    <label>Turma </label>
                    <select class="form-control col-sm-4" name="class_id" required>
                        @foreach ($turmas as $turma)
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
                <br />
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label"></label>
                    <input type="submit" value="cadastrar" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>

@endsection
