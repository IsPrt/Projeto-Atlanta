@extends('layouts.Atlanta')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Title</h3>
        <div class="card-toolbar">
            <button type="button" class="btn btn-sm btn-light">
                Action
            </button>
        </div>
    </div>
    <div class="card-body">
<form action="{{ route('crud.store') }}" method="POST">
@csrf       
@include('pages.crud.forms')
<button type="submit" class="btn btn-light-success">Adicionar</button>
</form>
    </div>
</div>
@endsection