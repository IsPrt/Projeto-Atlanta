<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserPhone;
use Illuminate\Http\Request;

class UserPhoneController extends Controller
{
    // Página de criação
    public function create()
    {
        // Retorna a view para criação de um novo UserPhone
        return view('mainpages.teste.create');
    }

    // Armazena os dados enviados no formulário de criação
    public function store(Request $request, $id)
    {

        $data =$request->all();
        $data['user_id'] =$id;
        // Criação do UserPhone
        UserPhone::create($data);

        return redirect()->route('users.index');
    }

    // Página de edição
    public function edit($id)
    {
        // Obtém o registro UserPhone pelo ID
        $user = User::find($id);

        // Retorna a view de edição com o registro carregado
        return view('mainpages.teste.editphone')->with([
            'user' => $user,
        ]);
    }

    // Atualiza um registro específico de UserPhone
    public function update(Request $request, $id)
    {
 
        $data =$request->all();

        // Busca o registro e atualiza com os dados validados
        $menu = UserPhone::find($id);
        $menu->update($data);
        
        return redirect()->route('users.index');
    }

    // Exibe um registro específico de UserPhone
    public function show($id)
    {
        // Busca o registro pelo ID
        $menu = UserPhone::findOrFail($id);

        // Retorna a view 'infos' com o registro carregado
        return view('mainpages.teste.infos', compact('menu'));
    }

    // Exclui um registro específico de UserPhone
    public function destroy($id)
    {
        UserPhone::destroy($id); // Exclui o registro pelo ID fornecido
        return redirect()->route('users.index')->with('success', 'Registro excluído com sucesso!');
    }
}
