@extends('layouts.app')


<body>
    <h1>Upload de Arquivo</h1>

    <!-- Exibe mensagens de sucesso ou erro -->
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
        <p>Arquivo armazenado em: {{ session('file') }}</p>
    @endif

    @if ($errors->any())
        <p style="color: red;">{{ $errors->first('file') }}</p>
    @endif

    <!-- Formulário de Upload -->
    <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
