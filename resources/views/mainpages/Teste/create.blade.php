@extends('layouts.app')

@section('content')
<div class="card card-bordered ">
    <div class="card-header">
        <h3 class="card-title">Novo Usuario</h3>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
<form action="{{ route('users.store') }}" method="POST">
@csrf       
@include('mainpages.teste.forms')
<button type="submit" class="btn btn-light-success">Adicionar</button>
</form>
    </div>
</div>
@endsection