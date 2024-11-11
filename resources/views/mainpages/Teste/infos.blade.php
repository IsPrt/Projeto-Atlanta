
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
                    <button class="btn btn-light-warning" data-id="{{ $phone->id }}" data-bs-toggle="modal" data-bs-target="#modal_userphone"</button>Editar Dados</button>
                </div>
            </div>
        @endforeach
    </div>
