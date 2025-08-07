<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistente;

class AsistenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asistentes = Asistente::all();
        return view('asistentes.index', compact('asistentes'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('asistentes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request)
    {
        $asistente = new Asistente();
        $asistente->nombre = $request->myname;
        $asistente->empresa = $request->companyname;
        $asistente->email = $request->myemail;
        $asistente->tipo_peticion = $request->requesttype;
        $asistente->comentario = $request->mycomments;
        $asistente->suscripcion = $request->has('subscribe');
        $asistente->referencia = $request->reference;
        $asistente->save();

        return redirect()->route('asistentes.index')->with('success', 'Asistente registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $asistente = Asistente::findOrFail($id);
        return view('asistentes.show', compact('asistente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $asistente = Asistente::findOrFail($id);
        return view('asistentes.edit', compact('asistente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'empresa' => 'nullable|string',
            'email' => 'required|email',
            'tipo_peticion' => 'nullable|string',
            'comentario' => 'nullable|string',
            'suscripcion' => 'boolean',
            'referencia' => 'nullable|string',
        ]);

        $asistente = Asistente::findOrFail($id);
        $asistente->update($request->all());

        return redirect()->route('asistentes.index')->with('success', 'Asistente actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $asistente = Asistente::findOrFail($id);
        $asistente->delete();

        return redirect()->route('asistentes.index')->with('success', 'Asistente eliminado correctamente.');
    }
}
