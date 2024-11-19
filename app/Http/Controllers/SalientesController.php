<?php

namespace App\Http\Controllers;
use App\Models\Salientes;

use Illuminate\Http\Request;
use App\Http\Requests\SalientesFormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class SalientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('search'));
            $salientes = DB::table('salientes')
            ->where('tipo_empleado', 'LIKE', '%' . $query . '%')
            ->orderBy('id', 'asc')
            ->paginate(7);

            return view('incapacidades._index', ['salientes'=>$salientes,'search'=>$query]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incapacidades._crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saliente = $request->validate([

            'nombre_completo' => 'required|string|max:200',
            'tipo_empleado' => 'required|string|max:200',
            'dias_incapacidad' => 'required|integer|min:1',
            'cedula' => 'required|string|max:20',
            'correo' => 'required|email',
            'codigo_incapacidad' => 'required|integer|min:100|max:9000',
            'incapacidad_pdf' => 'nullable|mimes:pdf|max:2048',
            'fecha_radicado' => 'required|date',
            'estado' => 'nullable|string|max:20',

        ]);

        if ($request->hasFile('incapacidad_pdf')) {
            $path = $request->file('incapacidad_pdf')->store('incapacidades', 'public');
            $saliente['incapacidad_pdf'] = $path;
        }

        Salientes::create($saliente);

        return redirect()->route('incapacidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saliente = Salientes::findOrFail($id);
        return view('incapacidades._update', compact('saliente'));
    }

    public function view($id)
    {
        $saliente = Salientes::findOrFail($id);
        return view('incapacidades._view', compact('saliente'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $actualizar_saliente = $request->validate([
            'nombre_completo' => 'required|string|max:200',
            'tipo_empleado' => 'required|string|max:200',
            'dias_incapacidad' => 'required|integer|min:1',
            'cedula' => 'required|string|max:20',
            'correo' => 'required|email',
            'codigo_incapacidad' => 'required|integer|min:100|max:9000',
            'incapacidad_pdf' => 'nullable|mimes:pdf|max:2048',
            'fecha_radicado' => 'required|date',
            'estado' => 'nullable|string|max:20',

        ]);

        $saliente = Salientes::findOrFail($id);
        $saliente->update($actualizar_saliente);
        return redirect()->route('incapacidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): RedirectResponse
    {
        $saliente = Salientes::findOrFail($id);
        $saliente->delete();
        return redirect()->route('incapacidades.index');
    }
}
