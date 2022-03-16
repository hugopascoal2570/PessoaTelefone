@extends('layouts.app')
@extends('adminlte::page')
@section('title', 'Novo telefone')
@section('content_header')
    <h1></h1>
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
        <div class="card-body">
            <form action="{{ route('telefones.store') }}" method="POST" class="form-horizontal"
                enctype="multipart/form-data">
                @csrf
                @include('admin.includes.alerts')
                <div class="col-sm-4">
                    <label>Pessoas</label>
                    <select class="form-control col-sm-4" name="pessoa_id" required>
                        @foreach ($pessoas as $pessoa)
                            <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Telefone</label>
                    <div class="col-sm-4">
                        <input type="text" name="telefone" id="telefone" data-mask="(00) 00000-0000"
                            class=" form-control @error('telefone') is-invalid @enderror">
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
