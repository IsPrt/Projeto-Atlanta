<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use SebastianBergmann\Type\TrueType;

class MenuController extends Controller
{

    // lista registros
    public function index()
    {
        // Obtenha todos os registros da tabela 'menus'
        $menus = Menu::all();
        
        // Passe os dados para a visualização
        return view('menu.index', ['menus' => $menus]);
    }

    // pagina de criacao
    public function create()
    {
        //RETURN VIEW WITH DATA
        return view('menu.create');
    }

    // armazena os dados enviados no formulario do create
    public function store(Request $request)
    {
        
        $dados = $request->all();

        Menu::create([
            'name' => $dados['name'],
            'status' => true,
        ]);

        return redirect()->route('menu.index');

    }

    // pagina de edicao
    public function edit($id)
    {
        // GET ALL DATA
        $menu = Menu::find($id);

        //RETURN VIEW WITH DATA
        return view('menu.edit')->with([
            'menu' => $menu,
        ]);
    }

    // encontra um registro atraves do $id e atualiza os dados enviados no formulario
    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        
        $menu->update($request->all());
        
        return redirect()->route('menu.index');
    }

    public function destroy($id)
    {
        Menu::destroy($id); // Exclui o registro com o ID fornecido
        return redirect()->route('menu.index')->with('success', 'Registro excluído com sucesso!');
    }   
}
