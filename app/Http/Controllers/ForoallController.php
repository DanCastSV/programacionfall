<?php

namespace App\Http\Controllers;

use App\Models\Foroall;
use Illuminate\Http\Request;

/**
 * Class ForoallController
 * @package App\Http\Controllers
 */
class ForoallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foroall = Foroall::paginate();

        return view('foroall.index', compact('foroall'))
            ->with('i', (request()->input('page', 1) - 1) * $foroall->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foroall = new Foroall();
        return view('foroall.create', compact('foroall'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Foroall::$rules);

        $foroall = Foroall::create($request->all());

        return redirect()->route('foroall.index')
            ->with('success', 'Publicación realizada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $foroall = Foroall::find($id);

        return view('foroall.show', compact('foroall'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $foroall = Foroall::find($id);

        return view('foroall.edit', compact('foroall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Foroall $foroall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foroall $foroall)
    {
        request()->validate(Foroall::$rules);

        $foroall->update($request->all());

        return redirect()->route('foroall.index')
            ->with('success', 'Foroall updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $foroall = Foroall::find($id)->delete();

        return redirect()->route('foroall.index')
            ->with('success', 'Foroall deleted successfully');
    }
}
