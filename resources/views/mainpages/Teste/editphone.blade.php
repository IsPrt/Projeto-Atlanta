<div class="card shadow-sm">
    <div class="card-body">
            @foreach ($user->phones as $phone)
            <form action="{{ route('userphone.update', $phone->id) }}" method="POST" id="form-edit-user">
                @csrf
                @method('put')
            <label for="fname">DDD:</label>
            <input type="text" name="ddd" class='form-control form-control-solid mb-4' placeholder="+41" value="{{ $phone->ddd ?? old('name') }}" required>
            <div>
                <label for="fname">Numero de Telefone:</label>
                <input type="text" name="number" class='form-control form-control-solid mb-4' placeholder="4002-8922" value="{{ $phone->number ?? old('name') }}" required>
            </div>
            <button class="btn btn-light-success btn-button-editphone" data-userphone="{{ $phone->id }}">Editar Dados</button>
            <a href="{{ route('userphone.destroy', $phone->id)}}" class="btn btn-icon btn-danger mx-1">
                <i class="bi bi-person-x-fill" style="font-size: 20px;"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                </a>
            </form>
            @endforeach
    </div>
</div>
