<div>
    <label for="fname">Nome:</label>
    <input type="text" name="name" class='form-control form-control-solid mb-4' placeholder="Silvio Santos" value="{{ $menu->name ?? old('name') }}" required>
</div>
<div>
    <label for="fname">Email:</label>
    <input type="text" name="email" class='form-control form-control-solid mb-4' placeholder="Exemplo@gmail.com" value="{{ $menu->email ?? old('name') }}" required>
</div>
<div>
    <label for="fname">Confirmar Email:</label>
    <input type="text" class='form-control form-control-solid mb-4' placeholder="Exemplo@gmail.com"  value="{{ $menu->email ?? old('name') }}" required>
</div>
<div>
    <label for="fname">Senha:</label>
    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="123456789" name="password" autocomplete="off" required>    
</div>
<div>
    <label for="fname">Confirmar Senha:</label>
    @if(session('message'))
    <p class='text-danger'> {{ session('message') }}</p>
    @endif
    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="123456789" name="confirm_password" autocomplete="off" required>    
</div>