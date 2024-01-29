<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peticione;
use Illuminate\Http\Request;

class AdminPeticionesController extends Controller
{
    public function index()
    {
        $peticiones = Peticione::paginate(10);
        return view('admin.peticiones.index', compact('peticiones'));
    }


    public function show(Request $request, $id)
    {
        $peticion = Peticione::findOrFail($id);
        return view('peticiones.show', compact('peticion'));
    }

    public function edit($id)
    {
        try {
            $peticion = Peticione::findOrFail($id);
            return view('admin.peticiones.edit-add', compact('peticion'));
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
        ]);

        try {
            $peticion = Peticione::findOrFail($id);

            $peticion->titulo = $request->input('titulo');
            $peticion->descripcion = $request->input('descripcion');

            $peticion->save();

            return redirect()->route('admin.peticiones.index')->with('success', 'Peticion actualizada exitosamente.');
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    public function destroy(Request $request, $id)
    {
        $peticion = Peticione::findOrFail($id);
        $peticion->delete();

        return redirect()->route('admin.peticiones.index')->with('success', 'La petición ha sido eliminada correctamente.');
    }


}
