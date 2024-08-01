<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::all();
        return view('materials.index', compact('materials'));
    }

    public function create()
    {
        return view('materials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'creditos' => 'required|numeric',
            'tipo' => 'required',
            'valor_hora' => 'required|numeric',
            'estado' => 'required',
        ]);

        Material::create($request->all());

        return redirect()->route('materials.index')
                         ->with('success', 'Material creado exitosamente.');
    }

    public function edit(Material $material)
    {
        return view('materials.edit', compact('material'));
    }

    public function update(Request $request, Material $material)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'creditos' => 'required|numeric',
            'tipo' => 'required',
            'valor_hora' => 'required|numeric',
            'estado' => 'required',
        ]);

        $material->update($request->all());

        return redirect()->route('materials.index')
                         ->with('success', 'Material actualizado exitosamente.');
    }

    public function destroy(Material $material)
    {
        $material->delete();

        return redirect()->route('materials.index')
                         ->with('success', 'Material eliminado exitosamente.');
    }
}

?>
