<?php

namespace App\Http\Controllers;

use App\Models\Escuderia;
use App\Models\Piloto;
use Illuminate\Http\Request;

/**
 * Class PilotoController
 * @package App\Http\Controllers
 */
class PilotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilotos = Piloto::paginate();

        return view('piloto.index', compact('pilotos'))
            ->with('i', (request()->input('page', 1) - 1) * $pilotos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $piloto = new Piloto();
        $escuderias=Escuderia::pluck('nombre','id');
        return view('piloto.create', compact('piloto','escuderias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Piloto::$rules);

        $piloto = Piloto::create($request->all());

        return redirect()->route('pilotos.index')
            ->with('success', 'Piloto creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $piloto = Piloto::find($id);

        return view('piloto.show', compact('piloto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $piloto = Piloto::find($id);
        $escuderias=Escuderia::pluck('nombre','id');
        return view('piloto.edit', compact('piloto','escuderias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Piloto $piloto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piloto $piloto)
    {
        request()->validate(Piloto::$rules);

        $piloto->update($request->all());

        return redirect()->route('pilotos.index')
            ->with('success', 'Piloto actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $piloto = Piloto::find($id)->delete();

        return redirect()->route('pilotos.index')
            ->with('success', 'Piloto borrado correctamente');
    }
}
