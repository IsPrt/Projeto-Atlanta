@extends('layouts.atlanta')
{{-- carrega o tema --}}

@section('title', 'Players')
@section('content')
<div class="row g-15 justify-content-center">
    <div class="col-lg-7">
        <div class="card card-stretch card-bordered mb-5">

            <div class="table-responsive">
                <table class="table table-row-bordered gy-5 ">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800">
                            <th class="table-sort-desc class="text-start" style="padding-left: 20px;">Nome</th>
                            <th>Email</th>
                            <th>Senha</th>
                            <th>ID</th>
                            <th class="text-end" style="padding-right: 50px;">Ações  </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                                @if($contents->count())
                                    @foreach ($contents as $abc)
                                    <tr>
                                        <td>
                                        <p class="text-start" style="padding-left: 20px;">{{ $abc->name }}</p> {{-- Exemplo de exibição do campo nome --}}
                                        </td>
                                        <td>
                                        <p>{{ $abc->email }}</p> {{-- Exemplo de exibição do campo nome --}}
                                        </td>
                                        <td>
                                        <p>{{ $abc->password }}</p> {{-- Exemplo de exibição do campo nome --}}
                                        </td>
                                        <td>
                                        <p>{{ $abc->id }}</p> {{-- Exemplo de exibição do campo nome --}}
                                        </td>
                                        <td style="padding-left: 20px;">

                                            <a href="{{ route('users.edit', $abc->id)}}" class="btn btn-icon btn-primary">
                                                <i class="bi bi-pencil" style="font-size: 20px;"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                                </a>
                                            <a href="{{ route('users.destroy', $abc->id)}}" class="btn btn-icon btn-danger">
                                                <i class="bi bi-person-x-fill" style="font-size: 20px;"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                                </a>
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