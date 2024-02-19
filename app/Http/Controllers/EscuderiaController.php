<?php

namespace App\Http\Controllers;

use App\Models\Escuderia;
use Illuminate\Http\Request;

/**
 * Class EscuderiaController
 * @package App\Http\Controllers
 */
class EscuderiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escuderias = Escuderia::paginate();

        return view('escuderia.index', compact('escuderias'))
            ->with('i', (request()->input('page', 1) - 1) * $escuderias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escuderia = new Escuderia();
        return view('escuderia.create', compact('escuderia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Escuderia::$rules);

        $escuderia = Escuderia::create($request->all());

        return redirect()->route('escuderias.index')
            ->with('success', 'Escuderia creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $escuderia = Escuderia::find($id);

        return view('escuderia.show', compact('escuderia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $escuderia = Escuderia::find($id);

        return view('escuderia.edit', compact('escuderia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Escuderia $escuderia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escuderia $escuderia)
    {
        request()->validate(Escuderia::$rules);

        $escuderia->update($request->all());

        return redirect()->route('escuderias.index')
            ->with('success', 'Escuderia actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $escuderia = Escuderia::find($id)->delete();

        return redirect()->route('escuderias.index')
            ->with('success', 'Escuderia borrada correctamente');
    }
}
