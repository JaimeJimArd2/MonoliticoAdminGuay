<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class AdminCategoriasController extends Controller
{
    public function index()
    {
        $categoria = Categoria::paginate(10);
        return view('admin.categorias.index', compact('categoria'));
    }
}
