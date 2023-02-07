<?php

namespace App\Http\Controllers;
use App\Models\Genero;
use App\Models\Manga;
use Illuminate\Http\Request;

/**
 * Class MangaController
 * @package App\Http\Controllers
 */
class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mangas = Manga::paginate();

        return view('manga.index', compact('mangas'))
            ->with('i', (request()->input('page', 1) - 1) * $mangas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manga = new Manga();
        $genero = Genero::pluck('nombre', 'id');
        return view('manga.create', compact('manga', 'genero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Manga::$rules);

        $manga = Manga::create($request->all());

        return redirect()->route('mangas.index')
            ->with('success', 'Manga created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manga = Manga::find($id);

        return view('manga.show', compact('manga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manga = Manga::find($id);
        $genero = Genero::pluck('nombre', 'id');
        return view('manga.edit', compact('manga', 'genero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Manga $manga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manga $manga)
    {
        request()->validate(Manga::$rules);

        $manga->update($request->all());

        return redirect()->route('mangas.index')
            ->with('success', 'Manga updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $manga = Manga::find($id)->delete();

        return redirect()->route('mangas.index')
            ->with('success', 'Manga deleted successfully');
    }
}
