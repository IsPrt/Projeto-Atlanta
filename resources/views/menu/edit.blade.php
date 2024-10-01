@extends('layouts.theme')
{{-- carrega o tema --}}

@section('content')
<form action="{{ route('menu.update', $menu->id) }}" method="POST">
  @csrf
  @method('put')
  <label for="fname">Nome do cardapio:</label>
  <input type="text" name="name" value="{{ $menu->name }}">
  {{-- o campo value do html, permite voce deixar um valor escrito --}}
  {{-- na edicao e muito bom, pq ai vc mostra como estava antes para o cliente --}}
  <input type="submit" value="Editar Cardapio">
</form>


<a href="{{ route('menu.destroy', $menu->id) }}">
  <button type="submit">Excluir Cardapio</button>
</a>

@endsection
