@extends('layouts.app')
@extends('adminlte::page')
@section('title', 'Novo Pessoa')
@section('content_header')
    <h1></h1>
@endsection
@section('script')
    <script>
        jQuery(document).ready(function() {
            $('.phone').mask.mask('(00) 00000-0000');
            $('.date').mask('00/00/0000');
            $('.cpf').mask('000.000.000-00', {
                reverse: true
            });

        });
    </script>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pessoas.store') }}" method="POST" class="form-horizontal"
                enctype="multipart/form-data">
                @csrf
                @include('admin.includes.alerts')
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Nome da Pessoa</label>
                    <div class="col-sm-4">
                        <input type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">CPF</label>
                    <div class="col-sm-4">
                        <input type="text" name="cpf" id="cpf" data-mask="000.000.000-00"
                            class="form-control @error('cpf') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Dada de Nascimento</label>
                    <div class="col-sm-4">
                        <input type="text" name="data_nasc" id="date" data-mask="00/00/0000"
                            class="form-control @error('data_nasc') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Nacionalidade</label>
                    <div class="col-sm-4">
                        <input type="text" name="nacionalidade" id="nacionalidade"
                            class="form-control @error('nacionalidade') is-invalid @enderror">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label"></label>
                    <input type="submit" value="cadastrar" class="btn btn-success">
                </div>
        </div>
        </form>

    </div>
    </div>

@endsection
