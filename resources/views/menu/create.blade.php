<form action="{{ route('menu.store') }}" method="POST">
    @csrf
    <label for="fname">Nome do cardapio:</label>
    <input type="text" name="name">
    <input type="submit" value="Adicionar Cardapio">
  <div>