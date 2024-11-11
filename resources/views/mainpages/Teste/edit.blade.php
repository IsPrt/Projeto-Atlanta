<div class="card shadow-sm mb-4">
    <div class="card-header">
        <h3 class="card-title">Editar Usuario</h3>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('users.update', $menu->id) }}" method="POST" id="form-edit-user">
            @csrf       
            @method('put')
            @include('mainpages.teste.forms')
            <button type="submit" class="btn btn-light-info">Editar Dados</button>
        </form>
        </form>
    </div>
</div>
<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Adicionar Telefone</h3>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('userphone.store', $menu->id) }}" method="POST">
            @csrf
            <label for="fname">DDD:</label>
            <input type="text" name="ddd" class='form-control form-control-solid mb-4' placeholder="+41" value="{{ $menu->ddd ?? old('name') }}" required>
            <div>
                <label for="fname">Numero de Telefone:</label>
                <input type="text" name="number" class='form-control form-control-solid mb-4' placeholder="4002-8922" value="{{ $menu->number ?? old('name') }}" required>
            </div>
            <button type="submit" class="btn btn-light-success">Adicionar Telefone</button>
        </form>
    </div>
</div>