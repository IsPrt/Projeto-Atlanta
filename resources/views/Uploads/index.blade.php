@extends('layouts.app')
{{-- carrega o tema --}}

@section('title', 'Tabela de Usuarios')
@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Upload de Arquivos</h3>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">

        <!-- Exibe mensagens de sucesso ou erro -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            <div class="mt-3">
                <ul>
                    @foreach (session('uploadedFiles', []) as $file)
                        <li>{{ $file }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first('files') }}
            </div>
        @endif

        <!-- Formulário de Upload -->
        <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" class="form-control mb-3">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-upload"></i> Enviar
            </button>
        </form>
    </div>
    <div class="card-footer">
    </div>
</div>
@endsection
