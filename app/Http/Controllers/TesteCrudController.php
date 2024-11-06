<?php

namespace App\Http\Controllers;

use App\Models\TesteCrud;
use Illuminate\Http\Request;

class TesteCrudController extends Controller
{

    // lista registros
    public function index()
    {
        // Obtenha todos os registros da tabela 'menus'
        $menus = TesteCrud::all();
        
        // Passe os dados para a visualização
        return view('pages.crud.index')->with([
            'contents' => $menus
        ]);
    }

    // pagina de criacao
    public function create()
    {
        //RETURN VIEW WITH DATA
        return view('pages.crud.create');
    }

    // armazena os dados enviados no formulario do create
    public function store(Request $request)
    {
        
        $dados = $request->all();
        TesteCrud::create([
            'name' => $dados['name'],
            'status' => true,
        ]);

        return redirect()->route('crud.index');

    }

    // pagina de edicao
    public function edit($id)
    {
        // GET ALL DATA
        $menu = TesteCrud::find($id);

        //RETURN VIEW WITH DATA
        return view('pages.crud.edit')->with([
            'menu' => $menu,
        ]);
    }

    // encontra um registro atraves do $id e atualiza os dados enviados no formulario
    public function update(Request $request, $id)
    {
        $menu = TesteCrud::find($id);
        
        $menu->update($request->all());
        
        return redirect()->route('crud.index');
    }

    public function destroy($id)
    {
        TesteCrud::destroy($id); // Exclui o registro com o ID fornecido
        return redirect()->route('crud.index')->with('success', 'Registro excluído com sucesso!');
    }   
}

