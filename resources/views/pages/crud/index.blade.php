@extends('layouts.atlanta')
{{-- carrega o tema --}}

@section('title', 'Testes')


@section('content')
<div class="card shadow-sm">
    <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse" data-bs-target="#kt_docs_card_collapsible">
        <h3 class="card-title fs-1">Itens</h3>
        <div class="card-toolbar rotate-180">
            <i class="ki-duotone ki-down fs-1"></i>
        </div>
    </div>
    <div id="kt_docs_card_collapsible" class="collapse show">
        <div class="card-body">
                @if($contents->count()) {{-- verifica se existem cardápios a serem exibidos --}}
                  @foreach ($contents as $abc) {{-- faz loop entre os itens exibindo um por um --}}
                    <p>
                      <a href="{{ route('crud.edit', $abc->id) }}" class="btn btn-light-info">{{ $abc->name }}</a>
                      <a href="{{ route('crud.destroy', $abc->id) }}">
                        <button type="submit" class="btn btn-light-danger" >Excluir</button>
                      </a>
                    </p>
                  @endforeach
                @else
                    Nenhum Item Encontrado
                @endif
        </div>
    </div>
</div>
        <div class="card-footer">
            
        <a href="{{ route('crud.create') }}" class="btn btn-light-success"> + Criar</a>
        </div>
        
    </div>
    
</div>

@endsection