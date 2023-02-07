<?php

namespace App\Http\Controllers;
use App\Models\Genero;
use App\Models\Intere;
use Illuminate\Http\Request;

/**
 * Class IntereController
 * @package App\Http\Controllers
 */
class IntereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interes = Intere::paginate();

        return view('intere.index', compact('interes'))
            ->with('i', (request()->input('page', 1) - 1) * $interes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $intere = new Intere();
        $genero = Genero::pluck('nombre', 'id');
        return view('intere.create', compact('intere', 'genero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Intere::$rules);

        $intere = Intere::create($request->all());

        return redirect()->route('interes.index')
            ->with('success', 'Intere created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $intere = Intere::find($id);

        return view('intere.show', compact('intere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $intere = Intere::find($id);
        $genero = Genero::pluck('nombre', 'id');
        return view('intere.edit', compact('intere', 'genero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Intere $intere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intere $intere)
    {
        request()->validate(Intere::$rules);

        $intere->update($request->all());

        return redirect()->route('interes.index')
            ->with('success', 'Intere updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $intere = Intere::find($id)->delete();

        return redirect()->route('interes.index')
            ->with('success', 'Intere deleted successfully');
    }
}
