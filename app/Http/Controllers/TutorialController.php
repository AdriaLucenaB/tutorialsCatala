<?php
namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function index()
    {
        // Mostrar todos los tutoriales
        $tutorials = Tutorial::all();
        return view('tutorials.index', compact('tutorials'));
    }

    public function create()
    {
        // Mostrar formulario para crear tutorial
        return view('tutorials.create');
    }

    public function store(Request $request)
    {
        // Guardar nuevo tutorial
        $request->validate([
            'title' => 'required',
            'summary' => 'nullable',
            'steps' => 'required|array'
        ]);

        Tutorial::create($request->all());

        return redirect()->route('tutorials.index');
    }

    public function show(Tutorial $tutorial)
    {
        // Mostrar detalles de un tutorial
        return view('tutorials.show', compact('tutorial'));
    }

    public function edit(Tutorial $tutorial)
    {
        // Mostrar formulario de edición
        return view('tutorials.edit', compact('tutorial'));
    }

    public function update(Request $request, Tutorial $tutorial)
    {
        // Actualizar tutorial
        $request->validate([
            'title' => 'required',
            'summary' => 'nullable',
            'steps' => 'required|array'
        ]);

        $tutorial->update($request->all());

        return redirect()->route('tutorials.index');
    }

    public function destroy(Tutorial $tutorial)
    {
        // Eliminar tutorial
        $tutorial->delete();

        return redirect()->route('tutorials.index');
    }
}
