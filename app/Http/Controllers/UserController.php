<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // lista registros
    public function index()
    {
        // Obtenha todos os registros da tabela 'menus'
        $menus = User::all();
        
        // Passe os dados para a visualização
        return view('mainpages.teste.index')->with([
            'contents' => $menus
        ]);
    }

    // pagina de criacao
    public function create()
    {
        //RETURN VIEW WITH DATA
        return view('mainpages.teste.create');
    }

    // armazena os dados enviados no formulario do create
    public function store(Request $request)
    {
          // Validação
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        // Criação do usuário
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'status' => true,
        ]);

        return redirect()->route('users.index');
    }

    // pagina de edicao
    public function edit($id)
    {
        // GET ALL DATA
        $menu = User::find($id);

        //RETURN VIEW WITH DATA
        return view('mainpages.teste.edit')->with([
            'menu' => $menu,
        ]);
    }

    // encontra um registro atraves do $id e atualiza os dados enviados no formulario
    public function update(Request $request, $id)
    {

        $data = $request->all();
        if ($data['password'] != $data['confirm_password']) {
            return redirect()->route('users.edit', $id)->with('message', 'As senhas precisam ser iguais.');
        }
        $data['password'] = Hash::make($request->password);
        $menu = User::find($id);
        $menu->update($data);
        
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        User::destroy($id); // Exclui o registro com o ID fornecido
        return redirect()->route('users.index')->with('success', 'Registro excluído com sucesso!');
    }   
}

