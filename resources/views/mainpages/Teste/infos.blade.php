@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Informações Usuarios</h3>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
        <h2>Nome:</h2>
        <p>{{ $menu->name }}</p>
        <h3>Email:</h3> 
        <p>{{ $menu->email }}</p>
        <h3>Senha:</h3>
        <p>{{ $menu->password }}</p>

        @foreach ($menu->phones as $phone)
            <div class="row mb-3">
                <div class="col">
                    <h3>Telefone:</h3>
                    <p>(+{{ $phone->ddd }}) {{ $phone->number }}</p>
                </div>
            </div>
        @endforeach

        <a href="{{ route('users.edit', $menu->id) }}" type="submit" class="btn btn-light-info">Editar</a>
        @if ($menu->phones->isNotEmpty())
            <a href="{{ route('userphone.edit', $menu->id) }}" type="submit" class="btn btn-light-warning">Editar Telefone</a>
        @endif
    </div>
</div>
@endsection
