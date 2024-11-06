@extends('layouts.app')
{{-- carrega o tema --}}

@section('title', 'Players')
@section('content')
<div class="row g-15">
    <div class="col-12">
        <div class="card card-stretch card-bordered mb-5">

            <div class="table-responsive">
                <table class="table table-row-bordered gy-5 ">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800">
                            <th class="table-sort-desc class="text-start" style="padding-left: 20px;">Nome</th>
                            <th>Email</th>
                            <th>Senha</th>
                            <th>ID</th>
                            <th width="100" class="text-center pe-6">Ações  </th>
                        </tr>
                    </thead>
                    <tbody class="align-middle fs-5">
                        
                                @if($contents->count())
                                    @foreach ($contents as $abc)
                                    <tr>
                                        <td>
                                        <span class="text-start" style="padding-left: 20px;">{{ $abc->name }}</span> {{-- Exemplo de exibição do campo nome --}}
                                        </td>
                                        <td>
                                        <span>{{ $abc->email }}</span> {{-- Exemplo de exibição do campo nome --}}
                                        </td>
                                        <td>
                                        <span>{{ $abc->password }}</span> {{-- Exemplo de exibição do campo nome --}}
                                        </td>
                                        <td>
                                        <span>{{ $abc->id }}</span> {{-- Exemplo de exibição do campo nome --}}
                                        </td>
                                        <td class="pe-6">
                                            <div class="d-flex justify-content-end">
                                                
                                            <a href="{{ route('users.edit', $abc->id)}}" class="btn btn-icon btn-primary mx-1">
                                                <i class="bi bi-pencil" style="font-size: 20px;"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                                </a>
                                            <a href="{{ route('users.destroy', $abc->id)}}" class="btn btn-icon btn-danger mx-1">
                                                <i class="bi bi-person-x-fill" style="font-size: 20px;"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    @endforeach
                                @else 
                                <tr>
                                    <td colspan="5" class="text-center fs-1">Nenhum Usuário Encontrado</td>
                                </tr>
                                @endif
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a href="{{ route('users.create') }}" class="btn btn-light-success">
                    <i class="bi bi-plus fs-1"></i>
                    Adicionar Usuario</a>
            </div>
        </div>
    </div>
</div>
@endsection