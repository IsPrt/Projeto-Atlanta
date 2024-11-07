<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function showUploadForm()
    {
        return view('uploads.index');
    }

    public function uploadFile(Request $request)
    {



        

        // Armazena o arquivo
        if ($request->file('file')->isValid()) {
            $path = $request->file('file')->store('uploads', 'public'); // Salva no disco 'public' na pasta 'uploads'
            $fileName = $request->file('file')->getClientOriginalName();
            $fileType = $request->file('file')->getMimeType();

            return back()->with([
                'success' => 'Arquivo carregado com sucesso!',
                'filePath' => $path,
                'fileName' => $fileName,
                'fileType' => $fileType,
            ]);
        }

        return back()->withErrors(['file' => 'Erro ao fazer o upload do arquivo.']);
    }
}
