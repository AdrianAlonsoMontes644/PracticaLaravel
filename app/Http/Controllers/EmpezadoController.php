<?php

namespace App\Http\Controllers;
use App\Models\Genero;
use App\Models\Empezado;
use Illuminate\Http\Request;

/**
 * Class EmpezadoController
 * @package App\Http\Controllers
 */
class EmpezadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empezados = Empezado::paginate();

        return view('empezado.index', compact('empezados'))
            ->with('i', (request()->input('page', 1) - 1) * $empezados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empezado = new Empezado();
        $genero = Genero::pluck('nombre', 'id');
        return view('empezado.create', compact('empezado', 'genero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Empezado::$rules);

        $empezado = Empezado::create($request->all());

        return redirect()->route('empezado.index')
            ->with('success', 'Empezado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empezado = Empezado::find($id);

        return view('empezado.show', compact('empezado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empezado = Empezado::find($id);
        $genero = Genero::pluck('nombre', 'id');
        return view('empezado.edit', compact('empezado', 'genero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empezado $empezado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empezado $empezado)
    {
        request()->validate(Empezado::$rules);

        $empezado->update($request->all());

        return redirect()->route('empezado.index')
            ->with('success', 'Empezado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empezado = Empezado::find($id)->delete();

        return redirect()->route('empezado.index')
            ->with('success', 'Empezado deleted successfully');
    }
}
