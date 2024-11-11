<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserPhone;
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
        $data = $request->all();

        // Criação do usuário
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'status' => true,
        ]);

        return response()->json('successful');
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
        
        return 'success';
    }

    public function show($id)
    {
        // Busca o post pelo ID e carrega as tags relacionadas
        $menu = User::findOrFail($id);

        // Retorna a view 'post.show' com o post e as tags associadas
        return view('mainpages.teste.infos')->with('menu', $menu);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->phones()->delete();
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Registro excluído com sucesso!');
    }   


    public function list()
    {
        // Obtenha todos os registros da tabela 'menus'
        $menus = User::all();
        
        // Passe os dados para a visualização
        return view('mainpages.teste._list')->with([
            'contents' => $menus
        ]);
    }

}

