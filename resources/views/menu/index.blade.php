<div>
  @if($menus->count()) {{-- verifica se existem cardápios a serem exibidos --}}
    @foreach ($menus as $menu) {{-- faz loop entre os itens exibindo um por um --}}
      <p>
        <a href="{{ route('menu.edit', $menu->id) }}">{{ $menu->name }}</a>
      </p>
    @endforeach
  @else
      Nenhum cardapio cadastrado
  @endif
</div>

<a href="{{ route('menu.create') }}">
  <button type="submit">Adicionar </button>
</a>