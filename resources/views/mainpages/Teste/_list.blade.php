@if($contents->count())
@foreach ($contents as $abc)
<tr>
    <td>
    <span class="text-start" style="padding-left: 20px;">{{ $abc->name }}</span> {{-- Exemplo de exibição do campo nome --}}
    </td>
    <td>
        <i class="bi bi-eye-slash" style="font-size: 20px;"></i>
    </td>
    <td>
        <i class="bi bi-eye-slash" style="font-size: 20px;"></i>
    </td>
    <td>
    <span>{{ $abc->id }}</span> {{-- Exemplo de exibição do campo nome --}}
    </td>
    <td class="pe-6">
        <div class="d-flex justify-content-end">
            
        <a href="{{ route('users.edit', $abc->id)}}" class="btn btn-icon btn-primary mx-1 btn-edit-modal" data-user="{{ $abc->id }}" data-bs-toggle="modal" data-bs-target="#modal_edit">
            <i class="bi bi-pencil" style="font-size: 20px;"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
            </a>
        <a href="" class="btn btn-icon btn-primary mx-1 btn-button-modal" data-user="{{ $abc->id }}" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
            <i class="bi bi-info-lg" style="font-size: 20px;"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
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