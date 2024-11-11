@extends('layouts.app')

@section('title', 'Usuários')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Categorias de Emojis</h1>
    
    <!-- Emoji para abrir o seletor de emojis -->
    <span id="mainEmojiIcon" style="font-size: 32px; cursor: pointer;"><i class="fa-regular fa-face-grin fs-2x"></i></span>
    
    <!-- Seletor de categorias e emojis -->
    <div id="categorySelector" style="display: none; position: absolute; width: 300px; max-height: 300px; overflow-y: auto; border: 1px solid #ddd; background: #fff;">
        
        <!-- Ícones de categorias fixos no topo e alinhados à esquerda -->
        <div style="display: flex; gap: 10px; position: sticky; top: 0; background: #fff; z-index: 1; padding: 5px;">
            @foreach ($categoriesEmojis as $index => $category)
                <button type="button" data-category="category-{{ $index }}" style="font-size: 24px; cursor: pointer; border: none; background: none; padding: 5px; margin: 0; color: #333;">{!! $category['icone'] !!}</button>
            @endforeach
        </div>
        
        <!-- Emojis por categoria -->
        @foreach ($categoriesEmojis as $index => $category)
            <div class="emoji-category" id="category-{{ $index }}" style="display: none;">
                <div class="emoji-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(30px, 1fr)); gap: 4px;">
                    @foreach ($category['icones'] as $emoji)
                        <span class="emoji" style="font-size: 18px; cursor: pointer;">{{ $emoji }}</span>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <input type="text" id="emojiInput" class="form-control mt-3" placeholder="Escolha um emoji...">
</div>

<script>
    // Função para mostrar a primeira categoria
    function showFirstCategory() {
        const firstCategory = document.getElementById('category-0');
        const categories = document.querySelectorAll('.emoji-category');
        categories.forEach(category => category.style.display = 'none'); // Oculta todas as categorias
        firstCategory.style.display = 'block'; // Mostra a primeira categoria
    }

    // Exibe/esconde o seletor ao clicar no emoji principal
    document.getElementById('mainEmojiIcon').addEventListener('click', function() {
        const categorySelector = document.getElementById('categorySelector');
        categorySelector.style.display = categorySelector.style.display === 'none' ? 'block' : 'none';
        if (categorySelector.style.display === 'block') {
            showFirstCategory(); // Mostra a primeira categoria ao abrir
        }
    });

    // Exibe a categoria correspondente ao clicar no botão de categoria
    document.querySelectorAll('[data-category]').forEach(button => {
        button.addEventListener('click', function() {
            const categoryId = this.getAttribute('data-category');
            const categories = document.querySelectorAll('.emoji-category');
            categories.forEach(category => category.style.display = 'none'); // Oculta todas as categorias
            document.getElementById(categoryId).style.display = 'block'; // Mostra a categoria correspondente
        });
    });

    // Adiciona o emoji ao campo de entrada ao clicar
    document.querySelectorAll('.emoji').forEach(emoji => {
        emoji.addEventListener('click', function() {
            document.getElementById('emojiInput').value += this.textContent;
        });
    });
</script>
@endsection
