<?php

namespace App\Http\Controllers;

use App\Models\Comunidad;
use Illuminate\Http\Request;

/**
 * Class ComunidadController
 * @package App\Http\Controllers
 */
class ComunidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunidads = Comunidad::paginate();

        return view('comunidad.index', compact('comunidads'))
            ->with('i', (request()->input('page', 1) - 1) * $comunidads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comunidad = new Comunidad();
        return view('comunidad.create', compact('comunidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Comunidad::$rules);

        $comunidad = Comunidad::create($request->all());

        return redirect()->route('comunidad.index')
            ->with('Exito', 'Post publicado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comunidad = Comunidad::find($id);

        return view('comunidad.show', compact('comunidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comunidad = Comunidad::find($id);

        return view('comunidad.edit', compact('comunidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Comunidad $comunidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comunidad $comunidad)
    {
        request()->validate(Comunidad::$rules);

        $comunidad->update($request->all());

        return redirect()->route('comunidad.index')
            ->with('success', 'Comunidad updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $comunidad = Comunidad::find($id)->delete();

        return redirect()->route('comunidad.index')
            ->with('success', 'Comunidad deleted successfully');
    }
}
