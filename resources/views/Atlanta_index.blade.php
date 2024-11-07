@extends('layouts.app')
{{-- carrega o tema --}}

@section('title', 'Usuários')

@section('content')
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias de Emojis</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .emoji-tab-content {
            display: flex;
            flex-wrap: wrap;
            padding: 10px;
        }
        .emoji {
            font-size: 24px;
            cursor: pointer;
            margin: 5px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Categorias de Emojis</h1>

    <!-- Navegação por abas -->
    <ul class="nav nav-tabs" id="emojiTab" role="tablist">
        <!-- Loop para gerar as abas dinamicamente -->
        @foreach ($categoriesEmojis as $category)
            <li class="nav-item">
                <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ str_replace(' ', '-', strtolower($category['icone'])) }}-tab"
                   data-toggle="tab" href="#{{ str_replace(' ', '-', strtolower($category['icone'])) }}" role="tab">
                    {{ $category['icone'] }}
                </a>
            </li>
        @endforeach
    </ul>

    <!-- Conteúdo das abas -->
     <div class="tab-content" id="emojiTabContent">
        <!-- Loop para gerar o conteúdo de cada aba -->
        @foreach ($categoriesEmojis as $category)
            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }} emoji-tab-content" id="{{ str_replace(' ', '-', strtolower($category['icone'])) }}" role="tabpanel">
                <div>
                <b> {{  $category['titulo'] }}
                </b>

                </div>
                @foreach ($category['icones'] as $emoji)
                    <span class="emoji">{{ $emoji }}</span>
                @endforeach
            </div>
        @endforeach
    </div>

    <input type="text" id="emojiInput" class="form-control mt-3" placeholder="Escolha um emoji...">
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Adiciona o emoji ao campo de entrada quando clicado
    document.querySelectorAll('.emoji').forEach(emoji => {
        emoji.addEventListener('click', function() {
            const emojiInput = document.getElementById('emojiInput');
            emojiInput.value += this.textContent;
        });
    });
</script>

<!-- Script para carregar Twemoji e substituir emojis não suportados -->
<script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js"></script>
<script>
    // Inicializa o Twemoji para substituir emojis
    document.addEventListener('DOMContentLoaded', () => {
        twemoji.parse(document.body, {
            folder: 'svg',
            ext: '.svg'
        });
    });
</script>

</body>
</html>

@endsection 