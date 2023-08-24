<?php

namespace App\Http\Controllers;

use App\Models\Asking;
use Illuminate\Http\Request;

/**
 * Class AskingController
 * @package App\Http\Controllers
 */
class AskingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $askings = Asking::paginate();

        return view('asking.index', compact('askings'))
            ->with('i', (request()->input('page', 1) - 1) * $askings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asking = new Asking();
        return view('asking.create', compact('asking'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Asking::$rules);

        $asking = Asking::create($request->all());

        return redirect()->route('asking.index')
            ->with('success', 'Asking created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asking = Asking::find($id);

        return view('asking.show', compact('asking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asking = Asking::find($id);

        return view('asking.edit', compact('asking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Asking $asking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asking $asking)
    {
        request()->validate(Asking::$rules);

        $asking->update($request->all());

        return redirect()->route('asking.index')
            ->with('success', 'Asking updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asking = Asking::find($id)->delete();

        return redirect()->route('asking.index')
            ->with('success', 'Asking deleted successfully');
    }
}
