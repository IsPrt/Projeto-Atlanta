<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Recupera todos os posts do banco de dados.
        return view('posts.index', compact('posts')); // Retorna a view com os posts.
    }

    public function create()
    {
        return view('posts.create'); // Retorna a view para criar um novo post.
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]); // Valida os dados da requisição.

        Post::create($validated); // Cria um novo post no banco de dados.

        return redirect()->route('posts.index'); // Redireciona para a lista de posts.
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post')); // Retorna a view para mostrar um post específico.
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post')); // Retorna a view para editar um post.
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]); // Valida os dados da requisição.

        $post->update($validated); // Atualiza o post existente no banco de dados.

        return redirect()->route('posts.index'); // Redireciona para a lista de posts.
    }

    public function destroy(Post $post)
    {
        $post->delete(); // Remove o post do banco de dados.

        return redirect()->route('posts.index'); // Redireciona para a lista de posts.
    }
}
